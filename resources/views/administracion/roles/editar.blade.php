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
                <label class="card-title">Editar Grupo de Usuarios</label> 
            </div>
            <div class="card-body">
                <form action="{{asset('administracion/roles/update')}}/{{$roles->id}}" method="POST" > 
                    @csrf
                        <div class="mb-3">
                                <label>Nombre</label>
                                <input class="form-control" type="text" id="nombre" name="nombre" value="{{$roles->name}}"   placeholder="ingrese su nombre " />
                                <span class="icon"><i class="lni lni-user"></i></span>
                                @error('nombre')
                                    <div class="alert alert-warning">
                                    {{$message}}
                                    </div>
                                @enderror
                        </div>
                        
                      <a href="{{asset('administracion/roles')}}" class="btn btn-outline-danger" > Cancelar </a>
                      <button type="submit" class="btn btn-outline-success"> Actualizar</button>
                </form>
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