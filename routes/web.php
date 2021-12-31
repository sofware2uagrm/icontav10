<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\GestionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->to(route('login'));
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('empresas', EmpresaController::class)->names('empresas');
Route::resource('gestions', GestionController::class)->names('gestions');
Route::get('datosdelaempresa',[ActualController::class,'empresaactual'])->name('datosdelaempresa');
Route::get('gestiondelaempresa',[ActualController::class,'gestionactual'])->name('gestiondelaempresa');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
