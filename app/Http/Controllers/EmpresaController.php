<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas=Empresa::all();
     
        return view('empresas.index',compact('empresas'));
        //
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       $empresa= request()->except('_token');
         
        if($request->hasFile('logo')){
                $empresa['logo']=$request->file('logo')->store('uploads','public');
        }

          Empresa::insert($empresa);

//        return response()->json($datosEmpleado);
        return redirect()->route('empresas.index')->with('mensaje','Empleado agregado con éxito');  
   
    
    }
   


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
      //  $sql = 'SELECT * FROM empresas';
        //$products =Empresa::select($sql);
        return $empresa;
    

    
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        return view('empresas.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
         $datosEmpresa= request()->except(['_token','_method']);

        if($request->hasFile('logo')){
            $empresa=Empresa::findOrFail($empresa->id);
            Storage::delete('public/'.$empresa->logo);
            $datosEmpresa['logo']=$request->file('logo')->store('uploads','public');
        }

        Empresa::where('id','=',$empresa->id)->update($datosEmpresa);
        $empresa=Empresa::findOrFail($empresa->id);
        return view('empresas.edit', compact('empresa'));
    }
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresas=Empresa::findOrFail($empresa->id);
        if(Storage::delete('public/'.$empresas->logo)){

            Empresa::destroy($empresa->id);
        }
       


        return redirect()->route('empresas.index')->with('mensaje','Empleado borrado');
 
    }
 


}
