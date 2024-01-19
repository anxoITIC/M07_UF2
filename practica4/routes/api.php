<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ProfessorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Afegida les rutes de la API especificant que només utilitzem els metodes index,show,destroy a la ruta api/v1/professors
Route::apiResource('v1/professors', ProfessorController::class)
    ->only(['index', 'show', 'destroy']);

