@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title')
    <!--//agregamos un titulo  -->

@section('content_header')
@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <label class="card-title">Marcar el Acceso a los Formularios del Sistema</label>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <form action="{{ asset('administracion/permisos/update') }}/{{ $id_aux }}" method="POST">
                        @csrf
                        @foreach ($permisos as $permiso)
                            @php($per = $permiso['id'])
                            @php($sw = 0)
                            @foreach ($rol_permiso as $rol_per)
                                @if ($per == $rol_per['permission_id'])
                                    @php($sw = 1)
                                @endif
                            @endforeach
                            <div class="mb-1">
                                <ul data-widget="treeview">


                                    <input class="form-check-input" type="checkbox" @if ($sw == 1){{ 'checked' }} @endif
                                        value="{{ $permiso['id'] }}" name="permisos[]">
                                    <label hidden for="">{{ $permiso['name'] }}</label>
                                    <label for="">{{ $permiso['descripcion'] }}</label>

                                </ul>
                            </div>
                        @endforeach

                        <br>

                        <button class="btn btn-success" type="submit">Guardar</button>
                    </form>
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
    <script>
        console.log('Hi!');
    </script>
@stop

<!--//agregamos Java Script-->
