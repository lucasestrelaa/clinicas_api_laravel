<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Medico
Route::get('/medicos', [App\Http\Controllers\medicosController::class,'mostrar']);
Route::get('/medicos/{id}', [App\Http\Controllers\medicosController::class,'mostrarUmM']);
//Usuários
Route::get('/usuario', [App\Http\Controllers\usuariosController::class,'mostrar']);
Route::get('/usuario/{id}', [App\Http\Controllers\usuariosController::class,'mostrarUmU']);
//Horarios
Route::get('/horarios', [App\Http\Controllers\horariosController::class,'mostrar']);
Route::get('/horarios/{id}', [App\Http\Controllers\horariosController::class,'mostrarUmUH']);
//Históricos
Route::get('/historicos', [App\Http\Controllers\historicoController::class,'mostrar']);
Route::get('/historicos/{id}', [App\Http\Controllers\historicoController::class,'mostrarUmUHs']);
//Especialidades
Route::get('/especialidades', [App\Http\Controllers\especialidadesController::class,'mostrar']);
Route::get('/especialidades/{id}', [App\Http\Controllers\especialidadesController::class,'mostrarUmUE']);
//Clinicas
Route::get('/clinicas', [App\Http\Controllers\clinicasController::class,'mostrar']);
Route::get('/clinicas/{id}', [App\Http\Controllers\clinicasController::class,'mostrarUmUC']);