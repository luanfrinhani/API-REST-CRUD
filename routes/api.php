<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('/cadastro')->group(function(){
    Route::get('/',[\App\Http\Controllers\UsuarioController::class,'listarUsuarios']);
    Route::get('/{id}',[\App\Http\Controllers\UsuarioController::class,'mostrarUnico']);
    Route::post('/',[\App\Http\Controllers\UsuarioController::class,'guardar']);
    Route::put('/{id}',[\App\Http\Controllers\UsuarioController::class,'atualizar']);
    Route::delete('/{id}',[\App\Http\Controllers\UsuarioController::class,'deletar']);
});
