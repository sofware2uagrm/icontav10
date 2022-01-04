<div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            @if($form)
                
                <div class="card">
                    <div class="card-header">
                        {{$title}}
                    </div>

                    <div class="card-body m-4 p-4">
                        <div class="form-group">
                            <label for="">Codigo</label>
                            <input type="text" wire:model='codigo' class="form-control" value="{{$codigo}}">
                        </div>
                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input type="text" wire:model='descripcion' class="form-control" value="{{$descripcion}}">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="">Plan Tipo</label>
                            <select class="form-control" name="" wire:model='idCuentaPlanTipo' id="">
                                @if (!$idCuentaPlanTipo)
                                    <option value="">Seleccione un tipo de cuenta</option>
                                @endif
                                
                                @foreach (cuentas_plan_tipo() as $tipo)
                                    <option value="{{$tipo->idCuentaPlanTipo}}">{{$tipo->descripcion}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-footer">
                        <button type="button" wire:click='create_or_update()' class="btn btn-primary">Guardar</button>
                        <button type="button" wire:click='closed_form()' class="btn btn-danger">Cancelar</button>
                    </div>

                </div>
                
            @else
                @if ($isDetail)
                    <div class="card">
                        
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title"> {{cuenta_plan($idCuentaPlan)->codigo}} -  {{cuenta_plan($idCuentaPlan)->descripcion}}  </h5>
                                </div>
                              
                            </div>
                        </div>

                        <div class="card-body">
                           @if ($option_add_sub_cuenta)
                           {{-- sub_cuentas_disponibles --}}
                                {{-- AÑADE CUENTA --}}
                                <h5> Cuentas disponibles</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Codigo</th>
                                                <th class="border-0">Descripción</th>
                                                <th class="border-0">Tipo Plan Cuenta</th>
                                                <th class="border-0">Estado</th>
                                                <th class="border-0">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (sub_cuentas_disponibles($idCuentaPlan) as $plan)
                                                <tr>
                                                    <td>{{$plan->idCuentaPlan}}</td>
                                                    <td>{{$plan->codigo}}</td>
                                                    <td>{{$plan->descripcion}}</td>
                                                    <td>{{cuenta_plan_tipo($plan->idCuentaPlanTipo)->descripcion}}</td>
                                                    <td>
                                                        <span class="badge {{$plan->estado ? 'badge-success' : 'badge-danger' }}">
                                                            {{$plan->estado ? 'Activado' : 'Desactivado' }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <button wire:click='add_sub_cuenta({{$plan->idCuentaPlan}})' class="btn btn-sm btn-success"><i class="far fa-check-circle"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                           @else
                           
                              <!-- CUENTAS AÑADIDAS -->
                               @if (count(sub_cuentas($idCuentaPlan))>0)
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Descripción</th>
                                                <th class="border-0">Tipo Plan Cuenta</th>
                                                <th class="border-0">Estado</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (sub_cuentas($idCuentaPlan) as $plan)
                                                <tr>
                                                    <td>{{$plan->idCuentaPlan}}</td>
                                                    <td>{{$plan->descripcion}}</td>
                                                    <td>{{cuenta_plan_tipo($plan->idCuentaPlanTipo)->descripcion}}</td>
                                                    <td>
                                                        <span class="badge {{$plan->estado ? 'badge-success' : 'badge-danger' }}">
                                                            {{$plan->estado ? 'Activado' : 'Desactivado' }}
                                                        </span>
                                                    </td>
                                                   
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                               @else
                                   <div class="text-center alert alert-primary" role="alert">
                                       <strong>No existen sub cuentas añadidas a esta cuenta.. Añada alguna por favor</strong>
                                   </div>
                               @endif    
                           @endif
                        </div>
                        <div class="card-footer">
                            <button type="button" wire:click='closed_form_detail()' class="btn btn-danger">Cancelar</button>
                        </div>
                    </div>
                @else
                    <div class="card">
                        
                        <div class="card-header">
                            <button wire:click='show_create' class="btn btn-sm btn-primary">Agregar</button>                           
                            <div class="btn-group" role="group" aria-label="">
                                <div class="btn-group" role="group">
                                    <button id="dropdownId" type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        {{$idCuentaPlanTipo ?  $descripcionCuentaPlanTipo : "Cuentas" }}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                                        @foreach (tipo_cuentas() as $tipo_cuenta)
                                            <button class="dropdown-item" wire:click='showPlanCuenta({{$tipo_cuenta->idCuentaPlanTipo}})'>
                                                {{$tipo_cuenta->descripcion}}
                                            </button>                                                   
                                        @endforeach
                                    </div>
                                </div>
                            </div>  
                        </div>                

                        <div class="card-body p-0">
                            
                            @if (count($plan)>0)
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Descripción</th>
                                                <th class="border-0">Tipo Plan Cuenta</th>
                                                <th class="border-0">Estado</th>
                                                <th class="border-0">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($plan as $key => $plan)
                                                <tr>
                                                    <td>{{$plan->idCuentaPlan}}</td>
                                                    <td>{{$plan->descripcion}}</td>
                                                    <td>{{cuenta_plan_tipo($plan->idCuentaPlanTipo)->descripcion}}</td>
                                                   
                                                    <td>
                                                        <span class="badge {{$plan->estado ? 'badge-success' : 'badge-danger' }}">
                                                            {{$plan->estado ? 'Activado' : 'Desactivado' }}
                                                        </span>
                                                    </td>
                                                  
                                                    <td>
                                                        <button wire:click='update_estado({{$plan->idCuentaPlan}})'  class="btn btn-sm {{!$plan->estado ? 'btn-success' : 'btn-danger' }}">
                                                            @if ($plan->estado)
                                                                <i class="fas fa-unlock-alt"></i>
                                                            @else
                                                                <i class="fas fa-unlock"></i> 
                                                            @endif
                                                        </button>

                                                        <button wire:click='delete_tipo_cuenta({{$plan->idCuentaPlan}})'  class="btn btn-sm btn-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </button>

                                                        <!-- Button trigger modal -->
                                                        <button wire:click='show_update({{$plan->idCuentaPlan}})' type="button" class="btn btn-sm btn-success">
                                                            <i class="fas fa-edit"></i>
                                                        </button>

                                                        @if (is_null($plan->idPlanCuentaPadre))
                                                            <button wire:click='show_detalle_cuenta_padre({{$plan->idCuentaPlan}})' type="button" class="btn btn-sm btn-info">
                                                                <i class="fas fa-eye"></i>
                                                            </button>
                                                        @endif
                                                        <button class="btn btn-primary btn-sm" type="button" data-toggle="collapse"
                                                            data-target="#cuenta-detail{{ $key }}" aria-expanded="false"
                                                            aria-controls="cuenta-detail{{ $key }}">
                                                            <i class="fa fa-fw" aria-hidden="true" title="Copy to use bullseye"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="11">
                                                        <div class="collapse" id="cuenta-detail{{ $key }}" wire:ignore.self>
                                                            <div class="card card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#idAdd{{$key}}">
                                                                            <i class="fas fa-plus"></i>
                                                                        </button>

                                                                        <div wire:ignore.self class="modal fade" id="idAdd{{$key}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title">Agregar Cuenta - {{cuenta_plan($plan->idCuentaPlan)->descripcion}}</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="form-group">
                                                                                            <label for="">Codigo</label>
                                                                                            <input type="text" wire:model='codigo' class="form-control" value="{{$codigo}}">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="">Descripcion</label>
                                                                                            <input type="text" wire:model='descripcion' class="form-control" value="{{$descripcion}}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" wire:click='create_sub_cuenta({{$plan->idCuentaPlan}})' class="btn btn-primary">Guardar</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                        
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>ID</th>
                                                                                <th>Codigo</th>
                                                                                <th>Descripcion</th>
                                                                                <th>Accion</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tbody>
                                                                                @foreach (sub_cuentas($plan->idCuentaPlan) as $cuenta)
                                                                                    <tr>
                                                                                        <td>{{$cuenta->idCuentaPlan}}</td>
                                                                                        <td>{{$cuenta->codigo}}</td>
                                                                                        <td>{{$cuenta->descripcion}}</td>
                                                                                        <td>
                                                                                            <button wire:click='delete_tipo_cuenta({{$cuenta->idCuentaPlan}})'  class="btn btn-sm btn-danger">
                                                                                                <i class="fas fa-trash"></i>
                                                                                            </button>
                                                                                        </td>

                                                                                    </tr>
                                                                                @endforeach

                                                                            </tbody>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                        
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="alert alert-primary text-center" role="alert">
                                    <strong>No existen cuentas</strong>
                                </div>
                            @endif

                        </div>

                    </div>
                @endif

            @endif

        </div>
    </div>    
</div>
