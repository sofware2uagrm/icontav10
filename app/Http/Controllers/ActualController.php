<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Gestion;
use Illuminate\Http\Request;

class ActualController extends Controller
{
    public function empresaactual()
    {
        $empresa= Empresa::find(session('empresa_id'));
        //return $empresa;

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
