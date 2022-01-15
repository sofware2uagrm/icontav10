<?php

namespace App\Http\Controllers;
use App\Http\Controllers\EmpresaController;
use App\Models\Empresa;
use App\Models\Gestion;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\GestionController;
use Illuminate\Http\Request;

class ActualController extends Controller
{
    //

    public function empresaactual()
    {
        $empresa= Empresa::where('estado','activo' )->first();
        if($empresa!=NULL){
        return view('empresas.edit',compact('empresa'));
    }  return "no hay una empresa activa";
    }
    public function gestionactual()
    {
        $gestion= Gestion::all()->first();
        return view('gestions.edit',compact('gestion'));
    }
     
}
