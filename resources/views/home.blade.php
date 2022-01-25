@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content_header')
  
@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')
    <p>Este sera la plantilla en la que trabajeros y uniremos nuestros trabajos realizados</p>

    <div class="container-fluid">
        <h2 class="text-center ">Usuarios Registrados</h2>
        
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <table id="tabla_empresa"  class=" table table-bordered table-sm">
                        <thead>
                            <th> id </th>
                            <th> Usuario </th>
                            <th> correo </th>
                            
                        </thead>
                        <tbody>   
                            @foreach ($datos as $dato)     
                        <tr>
                            <td>{{$dato['id']}}</td>
                            <td>{{$dato['name']}}</td>
                            <td>{{$dato['email']}}</td> 
                        </tr>
                        @endforeach
                   
                        </tbody>
                    </table>
                </div>
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