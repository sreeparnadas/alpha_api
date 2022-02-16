<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\AssemblyController;
use App\Http\Controllers\StateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PollingStationController;
use App\Http\Controllers\LegislativeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//get the user if you are authenticated
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("login",[UserController::class,'login']);
Route::get("login",[UserController::class,'authenticationError'])->name('login');



Route::post("register",[UserController::class,'register']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's

    Route::get("revokeAll",[UserController::class,'revoke_all']);

    Route::get('/me', function(Request $request) {
        return auth()->user();
    });
    Route::get("user",[UserController::class,'getCurrentUser']);
    Route::get("logout",[UserController::class,'logout']);

    //get all users
    Route::get("users",[UserController::class,'getAllUsers']);
    Route::post('uploadPicture',[UserController::class,'uploadPicture']);
    Route::get("getAllArea",[AreaController::class, 'get_area']);

    Route::group(array('prefix' => 'person'), function() {

        Route::get("/assembly/{id}", [PersonController::class, 'showPersonByAssembly']);
        Route::post("/", [PersonController::class, 'store']);
    });

    Route::group(array('prefix' => 'legislative'), function() {

        Route::get("/{userParentId}", [LegislativeController::class, 'showVolunteersByPollingStationId']);
        Route::post("/", [LegislativeController::class, 'storeVolunteer']);
    });

    Route::group(array('prefix' => 'pollingStations'), function() {

        Route::get("/{assemblyId}", [PollingStationController::class, 'fetchPollingStationByAssemblyId']);
    });

});




Route::group(array('prefix' => 'dev'), function() {

    Route::group(array('prefix' => 'assembly'), function() {

        Route::get("/", [AssemblyController::class, 'index']);
        Route::get("/district/{id}", [AssemblyController::class, 'fetchAssemblyByDistrictId']);

        Route::get("/allData", [AssemblyController::class, 'fetchAssemblyConstituenciesAlongWithDistricts']);

    });
    Route::group(array('prefix' => 'states'), function() {

        Route::get("/", [StateController::class, 'index']);
    });

    Route::group(array('prefix' => 'pollingStations'), function() {

        Route::get("/{assemblyId}", [PollingStationController::class, 'fetchPollingStationByAssemblyId']);
    });

    Route::get("states",[StateController::class, 'index']);
    Route::get("states/{id}",[StateController::class, 'index_by_id']);

    Route::group(array('prefix' => 'person'), function() {

        Route::get("/assembly/{id}", [PersonController::class, 'showPersonByAssembly']);
        Route::post("/", [PersonController::class, 'store']);
    });

    Route::group(array('prefix' => 'legislative'), function() {

        Route::get("/{userParentId}", [LegislativeController::class, 'showVolunteersByPollingStationId']);
        Route::post("/", [LegislativeController::class, 'storeVolunteer']);
    });

    Route::get("logout",[UserController::class,'logout']);


    Route::get("users",[UserController::class,'index']);

    //Area
    Route::get("getAllArea",[AreaController::class, 'get_area']);
});

