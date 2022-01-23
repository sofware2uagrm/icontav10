@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content_header')
@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')

<div class="container-fluid">
    <h1 class="text-center" >Agregar Usuarios</h1>   
    <br>
        <div class="mb-4 text-center">
            <a class="btn btn-dark" href="{{asset('administracion')}}"> <i class="bi bi-coin"></i> Usuarios</a>
            <a class="btn btn-dark" href="{{asset('administracion/roles')}}"><i class="bi bi-file-earmark-bar-graph"></i> Roles</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{asset('administracion/usuarios/store')}}" method="POST" > 
                    @csrf
                    <div class="row" >
                      <div class="col" >
                            <div class="mb-3">
                                    <label>Nombre</label>
                                    <input class="form-control" type="text" id="nombre" name="nombre" value="{{old('nombre')}}"   placeholder="ingrese su nombre " />
                                    <span class="icon"><i class="lni lni-user"></i></span>
                                    @error('nombre')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                        </div>
                                    @enderror
                            </div>
                            
                            <div class="mb-3">
                                    <label>Correo</label>
                                    <input class="form-control" type="email" id="email" name="email" value="{{old('email')}}" placeholder="ingrese su correo" />
                                    @error('email')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                    <label>Contraseña</label>
                                    <input class="form-control" type="password" placeholder="escriba su contraseña" value="{{old('contraseña')}}" id="contraseña" name="contraseña" />
                                    @error('contraseña')
                                        <div class="alert alert-warning">
                                        {{$message}}
                                        </div>
                                    @enderror
                            </div>   
                       </div>
                       <div class="col" >

                            <div class="mb-3">
                                <label >Seleccione Rol </label> 
                                <select class="form-control" id="id_rol"  name="id_rol" required>
                                    @foreach ($roles as $rol)
                                     <option value="{{$rol->name}}">{{$rol->name}}</option>
                                    @endforeach
                                </select> 
                            </div>
                            <div class="mb-3">
                                <label>Confirmar Contraseña</label>
                                <input class="form-control" type="password" placeholder="vuelba a escribir su contraseña" value="{{old('confirmar_contraseña')}}" id="confirmar_contraseña" name="confirmar_contraseña" />
                                @error('confirmar_contraseña')
                                    <div class="alert alert-warning">
                                    {{$message}}
                                    </div>
                                @enderror
                            </div> 
                       </div>
                    </div>
                      <a href="{{asset('administracion')}}" class="btn btn-primary" > Regresar </a>
                      <button type="submit" class="btn btn-success"> Agregar</button>
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