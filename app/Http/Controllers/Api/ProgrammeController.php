<?php

namespace App\Http\Controllers\Api;

use App\Models\Programme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProgrammeRequirement;
use App\Http\Requests\StoreProgrammeRequest;
use App\Http\Requests\UpdateProgrammeRequest;
use Illuminate\Support\Facades\DB;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $programme = Programme::all();
        return response($programme, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProgrammeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProgrammeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function show(Programme $programme)
    {

        return response($programme, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProgrammeRequest  $request
     * @param  \App\Models\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgrammeRequest $request, Programme $programme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programme $programme)
    {
        //
    }

    public function check(Request $request)
    {

        $applicableProgrammeList = array();
        $credit = 0;
        $programmeList = Programme::all();
        $spmResult = $request->all();

        //check how many credit
        foreach ($spmResult as $subjectGred) {
            if ($subjectGred <= 7) // gred A = 1.... TH = 10
                $credit++;
        }

        foreach ($programmeList as $programme) {

            $specialreq = 0;
            $allow = true;

            //iterate over all non-special requirement
            $normalrequirement = ProgrammeRequirement::all()->where("programme_code", $programme["code"])->where("special_req", 0);

            if ($normalrequirement->count() > 0) {

                foreach ($normalrequirement as $requirement) {

                    if (isset($spmResult[$requirement->subject_id])) {
                        if ($spmResult[$requirement->subject_id] > $requirement->gred_id) { // gred_id A = 1.... TH = 10
                            $allow = false;
                            break;
                        }
                    }

                }
            }


            //if has special requirement req, check
            if ($programme['allow_specialreq_count'] > 0 && $allow) {

                //iterate over all special requirement
                $specialrequirement = ProgrammeRequirement::all()->where("programme_code", $programme["code"])->where("special_req", 1);
                if ($specialrequirement->count() > 0) {
                    foreach ($specialrequirement as $requirement) {
                        if (isset($spmResult[$requirement->subject_id])) {
                            if ($spmResult[$requirement->subject_id] < $requirement->gred_id) { // gred_id A = 1.... TH = 10
                                $specialreq++;
                            }
                        }
                    }
                }

            }

            if ($credit >= $programme['allow_credit_count'] && $specialreq >= $programme['allow_specialreq_count'] && $allow) {

                $campuslist = array();

                $campuses = DB::table("campus_programmes")
                    ->join('campuses', "campus_programmes.campus_id", '=', 'campuses.id')
                    ->where('campus_programmes.programme_code', '=', $programme->code)
                    ->get();

                foreach ($campuses as $campus) {

                    $campusdata = array(
                        "id" => $campus->cp_id,
                        "campus_id" => $campus->id,
                        "name" => $campus->name,
                    );

                    $campuslist[] = $campusdata;
                }

                $programme["campuses"] = $campuslist;

                $applicableProgrammeList[] = $programme;
            }

        }

        return response($applicableProgrammeList, 200);

    }
}
