


@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content_header')
    <h1>Bienbenidos Compañeros De Software 2</h1> 
@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')
<div><a class="btn btn-secondary" href="{{url('/gestions/create')}}">NUEVO  REGISTRO</a> </div>
<table id="gestiontable" class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>descripcion</th>
                <th>fechaini</th>
                <th>fechafin</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach( $gestions as $gestion)
            <tr>
                <td> {{ $gestion->id}}</td>
              

                <td> {{ $gestion->descripcion}}</td>
                <td> {{ $gestion->fecha_ini}}</td>
                <td> {{ $gestion->fecha_fin}}</td>

                  <td>
                    <a class ="btn btn-primary btn-sm" href="{{ route('gestions.edit',$gestion) }}">
                    Editar 
                   <br> 
                </a>     
              
               <td> 
                        <form action="{{ route('gestions.destroy',$gestion) }}" method="post">
                        @csrf
                        {{method_field('DELETE')}} 
                        <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">   
                        </form>
                    </td>  
            </tr>
            @endforeach
        </tbody>
</table>

@stop