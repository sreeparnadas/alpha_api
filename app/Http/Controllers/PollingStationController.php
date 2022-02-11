<?php

namespace App\Http\Controllers;

use App\Http\Resources\PollingStationResource;
use App\Models\PollingStation;
use Illuminate\Http\Request;

class PollingStationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){}

    public function fetchPollingStationByAssemblyId($assemblyConstituencyId)
    {
        $pollingStations = PollingStation::whereAssemblyConstituencyId($assemblyConstituencyId)->orderBy('id')->get();

        return response()->json(['success'=>1,'data'=> PollingStationResource::collection($pollingStations)], 200,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\PollingStation  $pollingStation
     * @return \Illuminate\Http\Response
     */
    public function show(PollingStation $pollingStation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PollingStation  $pollingStation
     * @return \Illuminate\Http\Response
     */
    public function edit(PollingStation $pollingStation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PollingStation  $pollingStation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PollingStation $pollingStation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PollingStation  $pollingStation
     * @return \Illuminate\Http\Response
     */
    public function destroy(PollingStation $pollingStation)
    {
        //
    }
}
