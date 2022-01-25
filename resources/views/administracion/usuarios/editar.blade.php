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
                <label class="card-title">Editar Usuarios</label> 
            </div>

            <div class="card-body">
                <form action="{{asset('administracion/usuarios/update')}}/{{$usuario->id}}" method="POST" > 
                    @csrf
                    <div class="row" >
                      <div class="col" >
                            <div class="mb-3">
                                    <label>Nombre de usuario</label>
                                    <input class="form-control" disabled type="text" id="nombre" name="nombre" value="{{$usuario->name}}"   placeholder="ingrese su nombre " />
                                    <span class="icon"><i class="lni lni-user"></i></span>
                                    @error('nombre')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                        </div>
                                    @enderror
                            </div>
                            
                            <div class="mb-3">
                                    <label>Correo</label>
                                    <input class="form-control" disabled type="email" id="email" name="email" value="{{$usuario->email}}" placeholder="ingrese su correo" />
                                    @error('email')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </div> 
                       </div>
                       <div class="col" >
                           <input type="hidden" value="{{$usuario->roles['0']->name}}" id="id_rol_aux" name="id_rol_aux" >

                            <div class="mb-3">
                                <label >Seleccione Rol </label> 
                                <select class="form-control" id="id_rol"  name="id_rol" required>
                                    @foreach ($roles as $rol)
                                     <option @if ($usuario->roles['0']->name == $rol->name){{'selected'}}@endif value="{{$rol->name}}">{{$rol->name}}</option>
                                    @endforeach
                                </select> 
                            </div>
                       </div>
                    </div>
                      <a href="{{asset('administracion')}}" class="btn btn-danger" > Cancelar </a>
                      <button type="submit" class="btn btn-success"> Actualizar</button>
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