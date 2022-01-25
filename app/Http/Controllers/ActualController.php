<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Gestion;
use Illuminate\Http\Request;

class ActualController extends Controller
{
    public function empresaactual()
    {
      

        if(session('empresa_id')){
            $empresa= Empresa::find(session('empresa_id'));
            //return $empresa;
        return view('empresas.edit',compact('empresa'));
    }
    else{  return "no hay una empresa activa";}
    }
    public function gestionactual()
    {
        $gestion= Gestion::all()->first();
        return view('gestions.edit',compact('gestion'));
    }

}
