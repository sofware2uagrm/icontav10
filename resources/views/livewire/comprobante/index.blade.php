<div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            @if ($form)
                <div class="card border">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <span>Agregar Comprobante</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <button class="btn btn-sm btn-primary" wire:click="close_create">Regresar</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card border-primary">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Codigo</label>
                                            <input type="text" name="codigo" id="codigo" wire:model='codigo'
                                                class="form-control" placeholder="" aria-describedby="helpId">
                                          
                                        </div>
                                        @error('codigo')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Numero de Documento</label>
                                            <input type="text" name="numeroDocumento" wire:model='numeroDocumento'
                                                id="numeroDocumento" class="form-control" placeholder=""
                                                aria-describedby="helpId">
                                            
                                        </div>
                                        @error('numeroDocumento')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Razon Social</label>
                                            <input type="text" name="razonSocial" wire:model='razonSocial'
                                                id="razonSocial" class="form-control" placeholder=""
                                                aria-describedby="helpId">
                                        </div>
                                        @error('razonSocial')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Glosa</label>
                                            <input type="text" class="form-control" name="glosa" id="glosa"
                                                wire:model='glosa' aria-describedby="helpId" placeholder="">
                                        </div>
                                        @error('glosa')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Fecha</label>
                                            <input type="date" class="form-control" name="fecha" id="fecha"
                                                wire:model='fecha' aria-describedby="helpId" placeholder="">
                                        </div>
                                        @error('fecha')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Moneda</label>
                                            <select wire:ignore class="form-control" name="moneda" id="moneda" wire:model='idMoneda'>
                                                @if (is_null($idMoneda))
                                                <option value="">Seleccione una opcion</option>
                                            @endif
                                          @foreach (monedas() as $moneda)
                                                <option value="{{$moneda->idMoneda}}">{{$moneda->descripcion}}</option>                                              
                                          @endforeach
                                            </select>
                                        </div>
                                        @error('idMoneda')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Tipo Comprobante</label>
                                            <select  wire:ignore class="form-control" name="idComprobanteTipo" id="idComprobanteTipo" wire:model=idComprobanteTipo>
                                                @if (is_null($idComprobanteTipo))
                                                    <option value="">Seleccione una opcion</option>
                                                @endif
                                              @foreach (comprobanteTipos() as $tipoComprobante)
                                                    <option value="{{$tipoComprobante->idComprobanteTipo}}">{{$tipoComprobante->descripcion}}</option>                                              
                                              @endforeach
                                            </select>
                                        </div>
                                        @error('idComprobanteTipo')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($total_debe!=$total_haber)
                    <div class="alert alert-danger" role="alert">
                        <strong>Los datos totales en el debe y haber deben ser iguales</strong>
                    </div>   
                 
                        
                    @endif
                   
                    <div class="card-body">
                        <div class="card border-primary">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span>Asientos</span>
                                    </div>
                                    
                                    <div class="col-md-6 text-right">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
                                          Agregar Asiento
                                        </button>
                                        
                                        <!-- Modal -->
                                        <div wire:ignore.self class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Agregar Nuevo Asiento</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                      
                                                        <div class="card">
                                                            <div class="header">
                                                                
                                                            </div>
                                             
                                                        <div class="row">
                                                            {{-- TIPOS DE CUENTAS --}}
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Cuenta Tipo</label>
                                                                    <select wire:ignore class="form-control" name="idCuentaPlanTipo" id="idCuentaPlanTipo" wire:model='idCuentaPlanTipo'>
                                                                      @if (is_null($idCuentaPlanTipo))
                                                                          <option value="">Seleccione una opcion</option>
                                                                      @endif
                                                                      @foreach (tipo_cuentas() as $cuentaPlan)
                                                                            <option value="{{$cuentaPlan->idCuentaPlanTipo}}">{{$cuentaPlan->descripcion}}</option>                                              
                                                                      @endforeach
                                                                    </select>
                                                                </div>
                                                               
                                                            </div>

                                                            {{-- SUB CUENTAS  --}}
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Cuenta  {{$idCuentaPlanTipo}} {{$idCuentaPlanHija}}</label>
                                                                    <select class="form-control" name="idCuentaPlanHija" id="idCuentaPlanHija" wire:model='idCuentaPlanHija'>
                                                                      @if (is_null($idCuentaPlanHija) || $idCuentaPlanHija =="")
                                                                          <option value="">Seleccione una opcion</option>
                                                                      @endif
                                                                      @if ($idCuentaPlanTipo)
                                                                        @foreach (tipo_cuentas_hijas($idCuentaPlanTipo) as $cuentaPlan)
                                                                                <option value="{{$cuentaPlan->idCuentaPlan}}">{{$cuentaPlan->descripcion}}</option>                                              
                                                                        @endforeach                                                                          
                                                                      @endif
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            {{-- SUB CUENTAS HIJAS --}}
                        
                                                           <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Sub Cuenta {{$idCuentaPlanHija}}</label>
                                                                    <select class="form-control" name="idCuentaPlan" id="idCuentaPlan" wire:model='idCuentaPlan'>
                                                                      @if (is_null($idCuentaPlan))
                                                                          <option value="">Seleccione una opcion</option>
                                                                      @endif
                                                                      @if ($idCuentaPlanHija)
                                                                        @foreach (tipo_cuentas_nietas($idCuentaPlanHija) as $cuentaPlan)
                                                                                <option value="{{$cuentaPlan->idCuentaPlan}}">{{$cuentaPlan->descripcion}}</option>                                              
                                                                        @endforeach                                                                          
                                                                      @endif
                                                                    </select>
                                                                </div>
                                                                
                                                            </div>
                                                              <div class="card-body">

                                                             
                                                                    <div class="col-md-6 alert alert-warning text-dark" role="alert">
                                                                        ASIENTO ELEGIDO : 
                                                                        @foreach ( subcuentaasiento($idCuentaPlan) as $sub )
                                                                            {{$sub->descripcion}}
                                                                        @endforeach
                                                  
                                                                   
                                                                                                                                   
                                                                </div>
                        
                                                                <div class="card-body">
                                                                   
                                                                   <table class="table">
                                                                       <thead>
                                                                           <tr>
                                                                               <th>#</th>
                                                                               <th>CODIGO</th>
                                                                               <th>SUBCUENTA</th>
                                                                               <th>ACCION</th>
                                                                               
                                                                           </tr>
                                                                       </thead>
                                                                       <tbody>
                                                                        @foreach (sub_cuentas($idCuentaPlanHija) as $subcuentahija )
                                                                           <tr>
                                                                               <td>{{$subcuentahija->idCuentaPlan}}</td>
                                                                               <td>{{$subcuentahija->codigo}}</td>
                                                                               <td>{{$subcuentahija->descripcion}}</td>
                                                                               <td><button   wire:click='seleccionarsubcuenta({{$subcuentahija->idCuentaPlan}})' class="btn btn-sm btn-success">
                                                                               Elegir
                                                                            </button></td>
                                                                           </tr>
                                                                           @endforeach
                                                                       </tbody>
                                                                      
                                                                   </table>                                                                  
                                                                </div>
                                                            
                                                            </div>
                                                            
                                                        </div>
                                                       
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Folio </label>
                                                                    <input type="text" name="glosaDetalle" id="glosaDetalle" wire:model='glosaDetalle'
                                                                        class="form-control" placeholder="" aria-describedby="helpId">
                                                                </div>
                                                                @error('glosaDetalle')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                            </div>
                                                          
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Debe</label>
                                                                    <input type="number" class="form-control" name="debe" id="debe"
                                                                        wire:model='debe' aria-describedby="helpId" placeholder="">
                                                                </div>
                                                                @error('debe')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Haber</label>
                                                                    <input type="number" class="form-control" name="haber" id="haber"
                                                                        wire:model='haber' aria-describedby="helpId" placeholder="">
                                                                </div>
                                                                @error('haber')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" wire:click="add_asiento" class="btn btn-primary">Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Cuenta Plan</th> 
                                                
                                                <th>Folio</th>  
                                                <th>Debe</th>  
                                                <th>Haber</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($array_asiento as $asiento)
                                                <tr>
                                                    <td>{{ CuentaPlane($asiento['idCuentaPlan'])->descripcion }}</td> 
                                                    
                                                    <td>{{$asiento['glosaDetalle']}}</td>  
                                                    <td>{{$asiento['debe']}}</td>  
                                                    <td>{{$asiento['haber']}}</td>  
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                               
                                               
                                                <td>{{$total_debe}}</td>
                                                <td>{{$total_haber}}</td>
                                               
                                                 
                                            </tr>
                                          
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (count($array_asiento) > 0)
                            <div class="card-header">
                                <button class="btn btn-sm btn-primary" wire:click="add_comprobante">Guardar</button>
                            </div>
                        @endif

                    </div>
                </div>
            @else
                @if ($isDetail)
                    <div class="card">
                        DETALLE
                    </div>
                @else
                    <div class="card">

                        <div class="card-header">
                           <div class="row">
                             
                                <div class="col-md-8">
                                    <button wire:click='show_create' class="btn btn-sm btn-primary">Agregar</button>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" wire:model='searchText' class="form-control" style="border-radius : 50px" placeholder='Buscar'>
                                </div>

                           </div>
                        </div>

                        <div class="card-body p-0">
                            @if (count($comprobantes) > 0)
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Codigo</th>
                                                <th class="border-0">Numero Documento</th>
                                                <th class="border-0">Razon Social</th>
                                                <th class="border-0">Fecha</th>
                                                <th class="border-0">Glosa</th>
                                                <th> Estado</th>
                                                <th class="border-0">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($comprobantes as $comprobante)
                                                <tr>
                                                    <td>{{ $comprobante->idComprobante }}</td>
                                                    <td>{{ $comprobante->codigo }}</td>
                                                    <td>{{ $comprobante->numeroDocumento }}</td>
                                                    <td>{{ $comprobante->razon_social }}</td>
                                                    <td>{{ $comprobante->fecha }}</td>
                                                    <td>{{ $comprobante->glosa }}</td>
                                                    
                                                    <td> 
                                                        <span class="badge {{$comprobante->estado ? 'badge-success' : 'badge-danger' }}">
                                                            {{$comprobante->estado ? 'Activado' : 'Desactivado' }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-dark">
                                                     <i class="fas fa-edit"> </i>
                                                            
                                                        </button>
                                                        <button
                                                            wire:click='delete_comprobante({{ $comprobante->idComprobante }})'
                                                            class="btn btn-sm btn-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </button>

                                                        <button wire:click='update_estado( {{$comprobante->idComprobante }})'  class="btn btn-sm {{!$comprobante->estado ? 'btn-success' : 'btn-danger' }}">
                                                            @if ($comprobante->estado)
                                                                <i class="fas fa-unlock-alt"></i>
                                                            @else
                                                                <i class="fas fa-unlock"></i> 
                                                            @endif
                                                        </button>

                                                        <!-- Button trigger modal -->
                                                          <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#detalle{{ $comprobante->idComprobante }}">
                                                            <i class="fas fa-eye"></i> 
                                                        </button> 
                                                        
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="detalle{{ $comprobante->idComprobante }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Detalle del Comprobante</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        {{-- <td>{{ $comprobante->idComprobante }}</td>
                                                                        <td>{{ $comprobante->codigo }}</td>
                                                                        <td>{{ $comprobante->numeroDocumento }}</td>
                                                                        <td>{{ $comprobante->razon_social }}</td>
                                                                        <td>{{ $comprobante->fecha }}</td>
                                                                        <td>{{ $comprobante->glosa }}</td> --}}


                                                                        <div class="card-header">
                                                                            <div class="text-left col-lg-6">
                                                                                <span class="">COMPROBANTE :<strong> #{{ $comprobante->idComprobante }}
                                                                                     {{-- {{ $ot }}  --}}
                                                                                </strong></span>
                                                                            </div>
                                                                            <div class="text-right col-lg-6">
                                                                                {{-- <span class="badge {{ badge_estado_orden($estado) }}">
                                                                                    {{ title_estado_orden($estado) }}
                                                                                </span>
                                                                    
                                                                                <span class="badge {{ badge_baja_item($this->baja) }}">{{ title_baja_item($this->baja) }}</span>
                                                                                <span
                                                                                    class="badge {{ facturado_baja_item($this->facturado) }}">{{ title_facturar($this->facturado) }}</span> --}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="p-2 border row">
                                                                                <div class="text-left col-md-4s"><strong>TIPO COMPROBANTE : </strong> 
                                                                                    {{ comprobanteTipo($comprobante->idComprobanteTipo)->descripcion  }}
                                                                                </div>
                                                                                <br>
                                                                                <br>
                                                                                <div class="text-right col-4"><strong> MONEDA : </strong>
                                                                                    {{ moneda($comprobante->idMoneda)->descripcion  }}
                                                                                    
                                                                               </div>
                                                                             
                                                                            
                                                                            {{-- <div class="p-2 border row">
                                                                                <div class="text-left col-md-4"><strong>Codigo : </strong> 
                                                                                    {{ $comprobante->codigo }}
                                                                                </div>
                                                                                <div class="text-center col-md-4"><strong>Fecha : </strong> 
                                                                                    {{ $comprobante->fecha }}
                                                                                </div>
                                                                                <div class="text-right col-md-4"><strong>Fecha Entrega : </strong>
                                                                                </div>
                                                                            </div> --}}
                                                                    
                                                                            <div class="card-body">
                                                                                <div class="responsive">
                                                                                    <table class="table">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Subcuenta</th> 
                                                                                                
                                                                                                <th>Folio</th>  
                                                                                                <th>Debe</th>  
                                                                                                <th>Haber</th>  
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            @foreach (detallecomprobante($comprobante->idComprobante) as $detalle )
                                                                                            <tr>
                                                                                                    
                                                                            
                                                                                                      
                                                                                                <td>{{CuentaPlane($detalle->idCuentaPlan)->descripcion}}</td>
                                                                                             
                                                                                                <td>{{$detalle->glosa}}</td>
                                                                                                <td>{{$detalle->debe}}</td>
                                                                                                <td>{{$detalle->haber}}</td>
                                                                                              
                                                                                        
                                                                                    </tr>
                                                                                            @endforeach
                                                                                                
                                                                                             
                                                                                    
                                                                                        </tbody>
                                                                                        
                                                                                </table>
                                                                            </div>
                                                                    
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Button trigger modal -->
                                                        {{-- <button
                                                            wire:click='show_update({{ $comprobante->idComprobante }})'
                                                            type="button" class="btn btn-sm btn-success">
                                                            <i class="fas fa-edit"></i>
                                                        </button> --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="alert alert-primary text-center" role="alert">
                                    <strong>No existen registros</strong>
                                </div>
                            @endif
                        </div>

                    </div>
                @endif
            @endif

        </div>
    </div>
</div>
