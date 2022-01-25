@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content_header')
@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')

<div class="container-fluid">

        <div class="card">

            <div class="card-header">
                <label class="card-title">Grupo de Usuarios Eliminados</label>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <a class="btn btn-primary" href="{{ asset('administracion/roles') }}"><i
                                class="fas fa-arrow-alt-circle-left"> Regresar</i></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table id="tabla_empresa"  class=" table table-bordered table-sm">
                    <thead>
                        <th> id </th>
                        <th> Nombre </th>
                        <th width="10px"> Opción </th>
                        
                    </thead>
                    <tbody>   
                    @foreach ($roles as $rol)     
                    <tr>
                        <td>{{$rol['id']}}</td>
                        <td>{{$rol['name']}}</td>
                        <td>
                            <a href="{{asset('administracion/roles/restaurar')}}/{{$rol['id']}}" class="btn btn-outline-success "><i class="fas fa-trash-restore"> Recuperar</i></a>
                        </td>       
                    </tr>
                    @endforeach
               
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop

<!--//Contenido de nuestra pagina -->

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

<!--//agregamos css -->

@section('js')
    <script> console.log('Hi!'); </script>
@stop

<!--//agregamos Java Script-->