<?php

use Illuminate\Support\Facades\Route;

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

Route::apiResource('solicitudes','SolicitudesController')->only(['store','update']);
Route::get('solicitudes/{id}/public', 'SolicitudesController@publicSolicitude');
Route::get('solicitudes/{id}/discard', 'SolicitudesController@discardSolicitude');
Route::get('solicitudes/{email}/list', 'SolicitudesController@listSolicitudes');
