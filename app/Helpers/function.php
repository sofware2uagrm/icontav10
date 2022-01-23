<?php


use App\Models\ComprobanteCuentaDetalle;
use App\Models\ComprobanteTipo;
use App\Models\CuentaPlan;
use App\Models\CuentaPlanTipo;
use App\Models\Moneda;



function cuantas_plan_padre(){
        $cuenta_plan = CuentaPlan::whereNull('idPlanCuentaPadre')->get();
        return $cuenta_plan;
    }

    function cuentas_plan_tipo(){
        return CuentaPlanTipo::all();
    }

    function cuenta_plan($idCuentaPlan){
        return CuentaPlan::findOrFail($idCuentaPlan);
    }

    function cuenta_plan_tipo($idCuentaPlanTipo){
        return CuentaPlanTipo::findOrFail($idCuentaPlanTipo);
    }

    function sub_cuentas($idCuentaPlan){
        return CuentaPlan::where('idPlanCuentaPadre','=',$idCuentaPlan)->get();
    }

    function sub_cuentas_disponibles($idCuentaPlan){
        return CuentaPlan::whereNull('idPlanCuentaPadre')
        ->where('idCuentaPlan','!=',$idCuentaPlan)->get();
    }

    function tipo_cuentas(){
        $response = CuentaPlanTipo::all();
        return $response;
    }


    
    function tipo_cuentas_hijas($idCuentaPlanTipo){
        
        return CuentaPlan::where('idCuentaPlanTipo','=',$idCuentaPlanTipo)
        ->whereNull('idPlanCuentaPadre')
        ->get();
    }

    function tipo_cuentas_nietas($idCuentaPlan){
        
        return CuentaPlan::where('idPlanCuentaPadre','=',$idCuentaPlan)
        // ->whereNotNull('idPlanCuentaPadre')
        ->get();
    }




    // ALL TABLAS
   

    function monedas(){
        $response = Moneda::all();
        return $response;
    }

   

    function comprobanteTipos(){
        $response = ComprobanteTipo::all();
        return $response;
    }
    


    function CuentaPlanes(){
        $response = CuentaPlan::all();
        return $response;
    }

   
    // ALL


    // TABLA FIND 

    

    function moneda($id){
        $response = Moneda::findOrFail($id);
        return $response;
    }

    

    function comprobanteTipo($id){
        $response = ComprobanteTipo::findOrFail($id);
        return $response;
    }
   


    function CuentaPlane($id){
        $response = CuentaPlan::findOrFail($id);
        return $response;
    }

   


    function tipoCuentas($idTipoCuenta){
        return CuentaPlan::where('idCuentaPlanTipo','=',$idTipoCuenta)->get();
    }
    function detallecomprobante($id){
        return ComprobanteCuentaDetalle::where('idComprobante','=',$id)->get();
    }
    function subcuentaasiento($id){
        return CuentaPlan::where('idCuentaPlan','=',$id)->get();
    }
?> 