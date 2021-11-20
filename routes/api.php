<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// memanggil patientController
use App\Http\Controllers\PatientController;

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

// method get, post, getDetail, put, delete
Route::get('/patient', [PatientController::class, 'index']);
Route::post('/patient', [PatientController::class, 'store']);
Route::get('/patient/{id}', [PatientController::class, 'show']);
Route::put('/patient/{id}', [PatientController::class, 'update']);
Route::delete('/patient/{id}', [PatientController::class, 'destroy']);
Route::get('/patient/search/{name}', [PatientController::class, 'search']);
Route::get('/patient/status/positive', [PatientController::class, 'positive']);
Route::get('/patient/status/recovered', [PatientController::class, 'recovered']);
Route::get('/patient/status/dead', [PatientController::class, 'dead']);

