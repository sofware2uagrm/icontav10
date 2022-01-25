@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title')
    <!--//agregamos un titulo  -->

@section('content_header')
@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')

    <div class="container-fluid">
        <br>
        {{-- <div class="mb-4 text-center">
            <a class="btn btn-dark" href="{{asset('administracion')}}"> <i class="bi bi-coin"></i> Usuarios</a>
            <a class="btn btn-dark" href="{{asset('administracion/roles')}}"><i class="bi bi-file-earmark-bar-graph"></i> Roles</a>
        </div> --}}
        {{-- <div class="mb-4" >
            <a class="btn btn-primary" href="{{asset('administracion/roles/create')}}"><i class="bi bi-brush"></i>agregar</a>
            <a class="btn btn-success" href="{{asset('administracion/roles/eliminados')}}"><i class="bi bi-brush"></i>eliminados</a>
        </div> --}}

        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Grupo Usuarios</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        {{-- <button type="submit" class="btn btn-sm btn-primary">Nueva  <i class="nav-icon fas fa-plus"></i></button> --}}
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#exampleModal">
                            <i class="fas fa-user-plus"> Nuevo </i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table id="tabla_empresa" class=" table table-bordered table-sm">
                    <thead>
                        <th> id </th>
                        <th> Nombre </th>
                        <th>Formularios</th>
                        
                        {{-- <th width="10px"> </th>
                        <th width="10px"> </th>
                        <th width="10px"> </th> --}}
                    </thead>
                    <tbody>
                        @foreach ($roles as $rol)
                            <tr>
                                <td>{{ $rol['id'] }}</td>
                                <td>{{ $rol['name'] }}</td>
                                <td width="10px">
                                    <a href="{{ asset('administracion/permisos') }}/{{ $rol['id'] }}"
                                        class="btn btn-info "><i class="fas fa-user-lock"></i></a>
                                </td>
                                <td width="10px">
                                    <a href="{{ asset('administracion/roles/edit') }}/{{ $rol['id'] }}"
                                        class="btn btn-success "><i class="fas fa-edit"></i></a>
                                </td>
                                <td width="10px">
                                    <a href="{{ asset('administracion/roles/destroy') }}/{{ $rol['id'] }}"
                                        class="btn btn-danger "><i class="fas fa-trash-alt"></i></a>
                                </td>
                                <td width="10px">
                                    <a class="btn btn-dark" href="{{asset('administracion/roles/eliminados')}}"><i class="fas fa-trash-restore-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!--cierre del card body-->
        </div> <!--cierre del card-->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h3 class="modal-title ml-auto" id="exampleModalLabel">Agregar Nuevo Grupo de Usuarios</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                @include('administracion.roles.create')
                                </div>
                            </div>
                        </div>
                        {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        </div> --}}
                    </div>
                    </div>
                </div>  <!--Cierra modal -->
    </div>

@stop

<!--//Contenido de nuestra pagina -->

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

<!--//agregamos css -->

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop

<!--//agregamos Java Script-->
