<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\ApplicationProgramme;
use Illuminate\Http\Request;

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

        foreach ($appliedProgramme as $programme) {

            ApplicationProgramme::create([
                "app_prog_id" => $application->id . $programme->campus->id,
                "application_id" => $application->id,
                "cp_id" => $programme->campus->id
            ]);
        }

        // insert SPM result

        return response($application->id, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
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
