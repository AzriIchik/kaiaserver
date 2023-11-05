<?php

use App\Http\Controllers\api\ApplicationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CampusController;
use App\Http\Controllers\api\GredController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\ProgrammeController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('programme/check', [ProgrammeController::class,'check']);

Route::resource('subject', SubjectController::class);
Route::resource('campus', CampusController::class);
Route::resource('programme', ProgrammeController::class);
Route::resource('gred', GredController::class);
Route::resource('application', ApplicationController::class);

