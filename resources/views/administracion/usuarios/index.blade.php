@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content_header')
@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')

<div class="container-fluid">
    <h1 class="text-center" >Usuarios</h1>   
    <br>
        <div class="mb-4 text-center">
            <a class="btn btn-dark" href="{{asset('administracion')}}"> <i class="bi bi-coin"></i> Usuarios</a>
            <a class="btn btn-dark" href="{{asset('administracion/roles')}}"><i class="bi bi-file-earmark-bar-graph"></i> Roles</a>
        </div>
        <div class="mb-4" >
            <a class="btn btn-primary" href="{{asset('administracion/usuarios/create')}}"><i class="bi bi-brush"></i>agregar</a>
            <a class="btn btn-success" href="{{asset('administracion/usuarios/eliminados')}}"><i class="bi bi-brush"></i>eliminados</a>
        </div>
        <div class="card">
            <div class="card-body">
                <table id="tabla_empresa"  class=" table table-bordered table-sm">
                    <thead>
                        <th> id </th>
                        <th> Usuario </th>
                        <th> correo </th>
                        <th> rol </th>
                        <th width="10px">  </th>
                        <th width="10px">  </th>
                    
                        
                    </thead>
                    <tbody>   
                    @foreach ($usuarios as $usuario)     
                    <tr>
                        <td>{{$usuario['id']}}</td>
                        <td>{{$usuario['name']}}</td>
                        <td>{{$usuario['email']}}</td> 
                        <td>{{$usuario->roles['0']->name }}</td>
                        <td >
                            <a href="{{asset('administracion/usuarios/edit')}}/{{$usuario['id']}}" class="btn btn-success ">editar</a>
                           
                        </td>
                        <td>
                            <a href="{{asset('administracion/usuarios/destroy')}}/{{$usuario['id']}}" class="btn btn-danger ">eliminar</a>
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