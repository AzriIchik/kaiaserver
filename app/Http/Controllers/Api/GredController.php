<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Gred;
use Illuminate\Http\Request;

class GredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gred = Gred::all();
        return response($gred, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gred  $gred
     * @return \Illuminate\Http\Response
     */
    public function show(Gred $gred)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gred  $gred
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gred $gred)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gred  $gred
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gred $gred)
    {
        //
    }
}
