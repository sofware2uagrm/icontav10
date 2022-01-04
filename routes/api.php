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

// ericka lopez santos

Route::get('/usuario/index', [App\Http\Controllers\Seguridad\UsuarioController::class, 'index']);
Route::get('/usuario/create', [App\Http\Controllers\Seguridad\UsuarioController::class, 'create']);
Route::post('/usuario/store', [App\Http\Controllers\Seguridad\UsuarioController::class, 'store']);
Route::get('/usuario/edit/{idusuario}', [App\Http\Controllers\Seguridad\UsuarioController::class, 'edit']);
Route::post('/usuario/update', [App\Http\Controllers\Seguridad\UsuarioController::class, 'update']);
Route::get('/usuario/show/{idusuario}', [App\Http\Controllers\Seguridad\UsuarioController::class, 'show']);
Route::post('/usuario/delete/{idusuario}', [App\Http\Controllers\Seguridad\UsuarioController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
