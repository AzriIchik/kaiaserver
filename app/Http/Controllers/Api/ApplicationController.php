<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\ApplicationProgramme;
use App\Models\Campus;
use App\Models\CampusProgramme;
use App\Models\Gred;
use App\Models\Programme;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Can only be accessed if login, else send invalid request
        // $request->sort - later do pagination
        // where -> based on who is logging in
        $application = Application::all();
        return response($application, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $application = Application::create([
            "name" => $request->name,
            "icno" => $request->icno,
            "school_name" => $request->schoolname,
            "dob" => $request->dob,
            "address" => $request->address,
            "mobilephoneno" => $request->mobilephoneno,
            "housephoneno" => $request->housephoneno,
            "email" => $request->email,
            "nationality" => $request->nationality,
            "religion" => $request->religion,
            "sex" => $request->sex,
            "spmresult" => $request->spmresult,
        ]);

        // insert Programme Result
        $appliedProgramme = json_decode($request->programme);
        $programmeList = array();

        foreach ($appliedProgramme as $programme) {

            $applicationCampusProgramme = ApplicationProgramme::create([
                "app_prog_id" => $application->application_id . $programme->campus->id,
                "application_id" => $application->application_id,
                "cp_id" => $programme->campus->id
            ]);

            $cpRes = CampusProgramme::all()->where("cp_id", $applicationCampusProgramme->cp_id)->first();

            $programmeList[] = [
                "campus" => Campus::all()->where("id", $cpRes->campus_id)->first(),
                "programme" => Programme::all()->where("code", $cpRes->programme_code)->first(),
            ];

        }

        $application["programme"] = $programmeList;

        return response($application, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {

        $programme = DB::table("application_programmes")->join("campus_programmes", "application_programmes.cp_id", "=", "campus_programmes.cp_id")->join("programmes", "campus_programmes.programme_code", "=", "programmes.code")->join("campuses", "campus_programmes.campus_id", "=", "campuses.id")->select("campuses.name as campus_name", "programmes.code as programme_code", "programmes.name as programme_name")->where("application_id","=", $application->application_id)->get();

        $spmresult = json_decode($application->spmresult);
        $temspmres = array();

        foreach ($spmresult as $result) {

            $subject = Subject::find($result->subject);
            $gred = Gred::find($result->gred);

            $temspmres[] = [
                "subject"=> $subject->name,
                "gred" => $gred->gred
            ];
        }


        $application["programmes"] = $programme;
        $application["spmresult"] = $temspmres;

        return response($application, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
