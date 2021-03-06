<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
// ARMIN
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\CuentaPlanController;
use App\Http\Controllers\CuentaPlanTipoController;
use App\Models\CuentaPlan;


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

// de leonel
Route::resource('empresas', EmpresaController::class)->names('empresas');
Route::resource('gestions', GestionController::class)->names('gestions');
Route::get('datosdelaempresa',[ActualController::class,'empresaactual'])->name('datosdelaempresa');
Route::get('gestiondelaempresa',[ActualController::class,'gestionactual'])->name('gestiondelaempresa');
Auth::routes();
//

//de lucas 
Route::resource('moneda', MonedaController::class);
Route::get('moneda',[ MonedaController::class , 'index']);
Route::post('moneda/update/{moneda}',[ MonedaController::class , 'update']);

Route::resource('formatoDocumento', FormatoDocController::class);
Route::get('formatoDocumento',[ FormatoDocController::class , 'index']);
Route::post('formatoDocumento/update/{formato_doc}',[ FormatoDocController::class , 'update']);

Route::resource('firmaReporte', FirmaReporteController::class);
Route::get('firmaReporte',[ FirmaReporteController::class , 'index']);
Route::post('firmaReporte/update/{firma_reporte}',[ FirmaReporteController::class , 'update']);

Route::resource('proyecto', ProyectoController::class);
Route::get('proyecto',[ ProyectoController::class , 'index']);
Route::post('proyecto/update/{proyecto}',[ ProyectoController::class , 'update']);

Route::resource('asientoLCV', AsientoLCVController::class);
Route::get('asientoLCV',[ AsientoLCVController::class , 'index']);
Route::post('asientoLCV/update/{asiento_LCV}',[ AsientoLCVController::class , 'update']);

Route::resource('tipoNivel', TiponivelController::class);
Route::get('tipoNivel',[ TiponivelController::class , 'index']);
Route::post('tipoNivel/update/{tiponivel}',[ TiponivelController::class , 'update']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// de armin

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/cuenta-plan',[CuentaPlanController::class,'mostrar'])->name('cuenta-plan.index');
    Route::get('/cuenta-tipo-plan',[CuentaPlanTipoController::class,'mostrar'])->name('cuenta-plan-tipo.index');

    Route::get('/comprobante',[ComprobanteController::class,'mostrar'])->name('comprobante.index');

});

Route::get('/example',function (){
    return cuantas_plan_padre();
});


//ericka lopez santos

Route::get('/usuario/index', [App\Http\Controllers\Seguridad\UsuarioController::class, 'pageindex']);
Route::get('/usuario/create', [App\Http\Controllers\Seguridad\UsuarioController::class, 'pagecreate']);
Route::get('/usuario/edit/{idusuario}', [App\Http\Controllers\Seguridad\UsuarioController::class, 'pageedit']);
Route::get('/usuario/show/{idusuario}', [App\Http\Controllers\Seguridad\UsuarioController::class, 'pageshow']);

Route::get('/grupousuario/index', [App\Http\Controllers\Seguridad\GrupoUsuarioController::class, 'pageindex']);
Route::get('/grupousuario/create', [App\Http\Controllers\Seguridad\GrupoUsuarioController::class, 'pagecreate']);
Route::get('/grupousuario/edit/{idgrupousuario}', [App\Http\Controllers\Seguridad\GrupoUsuarioController::class, 'pageedit']);
Route::get('/grupousuario/show/{idgrupousuario}', [App\Http\Controllers\Seguridad\GrupoUsuarioController::class, 'pageshow']);

Route::get('/formulario/index', [App\Http\Controllers\Seguridad\FormularioController::class, 'pageindex']);
Route::get('/formulario/asignar', [App\Http\Controllers\Seguridad\FormularioController::class, 'pageasignar']);

Route::get('/formulario/create', [App\Http\Controllers\Seguridad\FormularioController::class, 'pagecreate']);
Route::get('/formulario/edit/{idformulario}', [App\Http\Controllers\Seguridad\FormularioController::class, 'pageedit']);
Route::get('/formulario/show/{idformulario}', [App\Http\Controllers\Seguridad\FormularioController::class, 'pageshow']);
