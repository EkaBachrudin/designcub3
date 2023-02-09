<?php

use App\Http\Controllers\RegionalController;
use App\Http\Controllers\Test2Controller;
use Illuminate\Http\Request;
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

Route::get('/provinces', [RegionalController::class, 'getProvinces']);
Route::get('/regencies/{id}', [RegionalController::class, 'getRegencies']);
Route::get('/districts/{id}', [RegionalController::class, 'getDistricts']);
Route::get('/villages/{id}', [RegionalController::class, 'getVillages']);

Route::post('/subscribe', [Test2Controller::class, 'store']);
