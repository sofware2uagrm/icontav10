<?php

namespace App\Http\Livewire\Comprobante;

use App\Models\Comprobante;
use App\Models\ComprobanteCuentaDetalle;
use Livewire\Component;
use App\Models\CuentaPlan;
use Livewire\WithPagination;

class Index extends Component
{

    public $user;
    public $form =  false;
    public $isDetail =  false;

    // COMPROBANTE
    public $idComprobante;
    public $codigo;
    public $referidoa;
    public $numeroDocumento;
    public $glosa;
    public $razonSocial;
    public $tc = 0;
    public $fecha;
    public $estado;
    public $idBanco;
    public $idTipoTransaccion;
    public $idMoneda;
    public $idPeriodo;
    public $idComprobanteTipo;
    public $idTipoPago;
    public $idUser;


    public $idCuentaPlanTipo;
    public $idCuentaPlanHija;


    // DETALLLE
    public $idComprobanteCuentaDetalle;
    public $glosaDetalle;
    public $debe;
    public $haber;
    public $idCentroCosto;
    public $idCuentaPlan;

    public $array_asiento = [];


    public $total_debe = 0;
    public $total_haber = 0;
    public $validate_total=true;

    public $example;
    public $searchText;
    public $buscarsubcuenta;

    use WithPagination;

    public function render()
    {
        $searchText = '%'.$this->searchText.'%';
        
        return view('livewire.comprobante.index',[
            'comprobantes' => Comprobante::where('comprobante.codigo','LIKE','%'.$searchText.'%')->paginate(5)
        ]);
    }
   

    public function mount($user){
        $this->user = $user;
    }


    public function show_create(){
        $this->interfaces(true,false);
    }

    public function close_create(){
        $this->interfaces(false,false);
    }


    public function interfaces($form,$isDetail){
        $this->form = $form;
        $this->isDetail = $isDetail;
    }

    public function add_asiento(){
        $validatedData = $this->validate([
            'glosaDetalle' => 'required',
           
            'debe' => 'required',
            'haber' => 'required',

        ], [
            'glosaDetalle.required' => 'El campo Folio es obligatorio',
            
            'debe.required' => 'El campo Debe es obligatorio',
            'haber.required' => 'El campo Haber es obligatorio',

        ]);
        array_push($this->array_asiento,[
             'glosaDetalle' => $this->glosaDetalle, 
             'debe' => $this->debe, 
             'haber' => $this->haber, 
            
             'idCuentaPlan' => $this->idCuentaPlan
        ]);


        $this->total_debe =  $this->total_debe + $this->debe;
        $this->total_haber =  $this->total_haber + $this->haber;

        $this->reset_comprobante_detalle();
    }

    public function reset_comprobante_detalle(){
         $this->glosaDetalle = null; 
         $this->debe = null; 
         $this->haber = null; 
        
         $this->idCuentaPlan = null;
    }

    public function reset_comprobante(){
        $this->codigo=null;
        $this->numeroDocumento=null;
        $this->glosa=null;
        $this->razonSocial=null;
        $this->referidoa=null;
        $this->tc=null;
        $this->fecha=null;
        $this->idMoneda=null;
        $this->idComprobanteTipo=null;

    }

    public function add_comprobante(){
        
       if ($this->total_haber==$this->total_debe) {
        
        $validatedData = $this->validate([
            'codigo' => 'required',
            'numeroDocumento' => 'required',
            'razonSocial' => 'required',
            'glosa' => 'required',
            'fecha' => 'required',
            'idMoneda' => 'required',
            'idComprobanteTipo' => 'required',
           
           

            

        ], [
            'codigo.required' => 'El campo Codigo es obligatorio',
            'numeroDocumento.required' => 'El campo Numero Documento es obligatorio',
            'razonSocial.required' => 'El campo Razon Social es obligatorio',
            'glosa.required' => 'El campo Glosa es obligatorio',
            'fecha.required' => 'El campo Fecha es obligatorio', 
            'idMoneda.required' => 'El campo Moneda es obligatorio',           
            'idComprobanteTipo.required' => 'El campo Tipo Comprobante es obligatorio',
           
           


        ]);


        $comprobante = new Comprobante();
        $comprobante->codigo = $this->codigo;
        $comprobante->referidoa = $this->referidoa;
        $comprobante->numeroDocumento = $this->numeroDocumento;
        $comprobante->glosa = $this->glosa;
        $comprobante->razon_social = $this->razonSocial;
        $comprobante->tc = $this->tc;
        $comprobante->fecha = $this->fecha;
        $comprobante->estado = 0;     
        $comprobante->idMoneda = $this->idMoneda;
        $comprobante->idComprobanteTipo = $this->idComprobanteTipo;  
        $comprobante->save();
      
        for ($i=0; $i < count($this->array_asiento); $i++) { 
           
            $detalle = new ComprobanteCuentaDetalle();
            $detalle->codigo = null;
            $detalle->glosa = $this->array_asiento[$i]['glosaDetalle'];
            $detalle->debe = $this->array_asiento[$i]['debe'];
            $detalle->haber = $this->array_asiento[$i]['haber'];           
            $detalle->idCuentaPlan = $this->array_asiento[$i]['idCuentaPlan'];
            $detalle->idComprobante = $comprobante->idComprobante;
           
            $detalle->save();
        }
        
        $this->interfaces(false,false);
       }
       else{
            $this->validate_total=false;

       }
        $this->reset_comprobante();
        $this->reset_comprobante_detalle();
    }
    

    public function delete_comprobante($idComprobante){
        $comprobante = Comprobante::findOrFail($idComprobante);
        $comprobante->delete();
    }


    public function update_estado($idComprobante){
        $comprobante = Comprobante::findOrFail($idComprobante);
        $comprobante->estado =  !$comprobante->estado;
        $comprobante->update();
    }
    public function seleccionarsubcuenta($id){
        $this->idCuentaPlan=$id;
        
    }
   
    
}

