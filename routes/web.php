<?php

use Illuminate\Support\Facades\Route;

// leonel
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\GestionController;
// lucas
use App\Http\Controllers\MonedaController;
use App\Http\Controllers\AsientoLCVController;
use App\Http\Controllers\FormatoDocController;
use App\Http\Controllers\FirmaReporteController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TiponivelController;
use App\Http\Controllers\EliminacionRegistroController;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();

// de leonel
Route::resource('empresas', EmpresaController::class)->names('empresas');
Route::resource('gestions', GestionController::class)->names('gestions');
Route::get('datosdelaempresa',[ActualController::class,'empresaactual'])->name('datosdelaempresa');
Route::get('gestiondelaempresa',[ActualController::class,'gestionactual'])->name('gestiondelaempresa');

//

//de lucas 
Route::resource('moneda', MonedaController::class);
Route::post('moneda/update/{moneda}',[ MonedaController::class , 'update']);

Route::resource('formatoDocumento', FormatoDocController::class);
Route::post('formatoDocumento/update/{formato_doc}',[ FormatoDocController::class , 'update']);

Route::resource('firmaReporte', FirmaReporteController::class);
Route::post('firmaReporte/update/{firma_reporte}',[ FirmaReporteController::class , 'update']);

Route::resource('proyecto', ProyectoController::class);
Route::post('proyecto/update/{proyecto}',[ ProyectoController::class , 'update']);

Route::resource('asientoLCV', AsientoLCVController::class);
Route::post('asientoLCV/update/{asiento_LCV}',[ AsientoLCVController::class , 'update']);

Route::resource('tipoNivel', TiponivelController::class);
Route::post('tipoNivel/update/{tiponivel}',[ TiponivelController::class , 'update']);

// nicolas

Route::resource('eliminacion', EliminacionRegistroController::class);
Route::post('eliminacion/eliminar',[ EliminacionRegistroController::class , 'eliminar']);


