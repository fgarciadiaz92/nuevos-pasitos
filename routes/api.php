<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\TipoCalificacionController;

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

//RUTAS PRUEBA
Route::get('/prueba/',[PruebaController::class, 'index']);
Route::get('/prueba/{id}',[PruebaController::class, 'show']);
Route::post('/prueba',[PruebaController::class, 'create']);
Route::delete('/prueba/{id}',[PruebaController::class, 'destroy']);

//RUTAS CALIFICACION
Route::get('/tipo-calificacion/',[TipoCalificacionController::class, 'index']);
Route::get('/tipo-calificacion/{id}',[TipoCalificacionController::class, 'show']);
