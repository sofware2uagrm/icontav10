<?php

namespace App\Http\Controllers;

use App\Models\EliminacionRegistro;
use App\Models\Empresa;
use Illuminate\Http\Request;

class EliminacionRegistroController extends Controller
{
    
 
    protected $empresa;

    public function __construct()
    {
        $this->empresa= new Empresa();
    }

    public function index()
    {
        echo view('eliminacionregistro/eliminacionregistro');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EliminacionRegistro  $eliminacionRegistro
     * @return \Illuminate\Http\Response
     */
    public function show(EliminacionRegistro $eliminacionRegistro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EliminacionRegistro  $eliminacionRegistro
     * @return \Illuminate\Http\Response
     */
    public function edit(EliminacionRegistro $eliminacionRegistro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EliminacionRegistro  $eliminacionRegistro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EliminacionRegistro $eliminacionRegistro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EliminacionRegistro  $eliminacionRegistro
     * @return \Illuminate\Http\Response
     */
    public function destroy(EliminacionRegistro $eliminacionRegistro)
    {
        
    }
    public function eliminar()
    {
        $this->empresa->limpiarEMPRESA();
        echo view('eliminacionregistro/eliminacionregistro');
    }
}
