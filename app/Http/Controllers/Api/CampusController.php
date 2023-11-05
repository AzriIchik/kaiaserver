<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\campus;
use App\Http\Requests\StorecampusRequest;
use App\Http\Requests\UpdatecampusRequest;

class CampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campus = Campus::all();
        return response($campus, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecampusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecampusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\campus  $campus
     * @return \Illuminate\Http\Response
     */
    public function show(campus $campus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecampusRequest  $request
     * @param  \App\Models\campus  $campus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecampusRequest $request, campus $campus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\campus  $campus
     * @return \Illuminate\Http\Response
     */
    public function destroy(campus $campus)
    {
        //
    }
}
