<?php

namespace App\Http\Controllers;

use App\Http\Resources\PollingStationResource;
use App\Http\Resources\PollingVolunteerResource;
use App\Models\Person;
use App\Models\PollingStation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function fetchVolunteerByPollingId($pollingId)
    {
        $volunteers = Person::select('users.id','people.person_name', 'people.age', 'people.gender',
                    'people.mobile1', 'people.mobile2', 'people.aadhar_id','people.voter_id')
                    ->join('users','people.id','users.person_id')
                    ->where('people.polling_station_id',$pollingId)
                    ->where('people.person_type_id',4)
                    ->get();
        foreach($volunteers as $x){
            $x->workers = $this->countGeneralWorkers($x->id);
        }

        return response()->json(['success'=>1,'data'=> PollingVolunteerResource::collection($volunteers)], 200,[],JSON_NUMERIC_CHECK);
    }

    public function countGeneralWorkers($volunteerId){

        $totalWorkers = Person::select(DB::raw("count(*) as total_workers"))
            ->join('users','users.person_id','people.id')
            ->where('users.parent_id',$volunteerId)
            ->where('people.person_type_id',5)
            ->first();
        return $totalWorkers->total_workers;
    }
}
