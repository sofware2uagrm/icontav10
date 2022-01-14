
@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content_header')



@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')

  <div class="container-fluid">
        <h1 class="text-center" >Control De Parametros Del Sistema</h1>   
        <br>
        <div class="mb-4">
            <a class="btn btn-dark" href="{{asset('moneda')}}"> <i class="bi bi-coin"></i> Moneda</a>
            <a class="btn btn-dark" href="{{asset('formatoDocumento')}}"><i class="bi bi-file-earmark-bar-graph"></i> Formato De Documento</a>
            <a class="btn btn-dark" href="{{asset('firmaReporte')}}"><i class="bi bi-brush"></i> Firma De Reportes</a>
            <a class="btn btn-dark" href="{{asset('proyecto')}}"><i class="bi bi-filter-square"></i> Proyectos</a>
            <a class="btn btn-dark" href="{{asset('asientoLCV')}}"><i class="bi bi-filter-circle"></i> Asientos LCV</a>
            <a class="btn btn-dark" href="{{asset('tipoNivel')}}"> <i class="bi bi-sort-up"></i> Nivel</a>   
        </div>

        <div class="card">
            <div class="card-body">
                @foreach ($datos as $dato)
                    <form method="POST" action="{{asset('formatoDocumento/update')}}/{{$dato['id']}}">
                        @csrf
                        <input id="id_formato" type="hidden" value="{{$dato['id']}}" >
                        <label class="text-primary " >Impresion en Comprobantes</label> 
                        <br>
                        <div class="mb-3">
                            <label >Habilitar la Referencia en cada Registro </label> 
                            <select  name="habilitar_ref" id="habilitar_ref" required>
                                <option @if ($dato->habilitar_ref == 0) {{ 'selected' }} @endif value="0">SI</option>
                                <option @if ($dato->habilitar_ref == 1) {{ 'selected' }} @endif value="1">NO</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label >Imprimir el Nombre de la Cuenta Mayor en Comprobantes</label> 
                            <select  name="imprimir_nombre_comprobante" id="imprimir_nombre_comprobante" required>
                                <option @if ($dato->imprimir_nombre_comprobante == 0) {{ 'selected' }} @endif value="0">SI</option>
                                <option @if ($dato->imprimir_nombre_comprobante == 1) {{ 'selected' }} @endif value="1">NO</option>
                            </select>
                        </div>
                        <label class="text-primary">Formato en Comprobante y Reportes</label> 
                        <br>
                        <div class="mb-3">
                            <label >Mostrar la fecha y hora de impresion del documento </label> 
                            <select  name="mostrar_fecha_hora" id="mostrar_fecha_hora" required>
                                <option @if ($dato->mostrar_fecha_hora == 0) {{ 'selected' }} @endif value="0">SI</option>
                                <option @if ($dato->mostrar_fecha_hora == 1) {{ 'selected' }} @endif value="1">NO</option>
                            </select>
                        </div>
                        <br>
                        <br>
                        <br>
                    </form>
                @endforeach

                <form id="forformato">
                <button type="submit" class=" btn btn-outline-primary">guardar</button>
                <a href="" class=" btn btn-outline-success">cancelar</a>
                </form>
            </div>
        </div>
    </div>


@stop

<!--//Contenido de nuestra pagina -->

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
@stop

<!--//agregamos css -->

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

    <!-- moneda java scrip mas ajax-->
    <script>{{time();}}</script>
    <script>
    //ACTUALIZAR UN REGISTRO
    $('#forformato').submit(function(e){
        e.preventDefault();
        var imprimir_nombre_comprobante = $("#imprimir_nombre_comprobante").val();
        var id = $("#id_formato").val();
        var mostrar_fecha_hora = $("#mostrar_fecha_hora").val();
        var habilitar_ref = $("#habilitar_ref").val();
        var _token2 = $("input[name=_token]").val();
        var link="{{asset('')}}"+"formatoDocumento/update/"+id;
        $.ajax({
            url: link,
            type: "POST",
            data:{
                id:id,
                imprimir_nombre_comprobante:imprimir_nombre_comprobante,
                mostrar_fecha_hora:mostrar_fecha_hora,
                habilitar_ref:habilitar_ref,
                _token:_token2
            },
            success:function(response){
                if(response){
                    toastr.info('El registro de Formato Doc fue actualizado correctamente.', 'Actualizar Registro', {timeOut:3000})        
                }
            }
        })
    var link2="{{asset('formatoDocumento/update')}}";
    $.ajax({
            url: link2,      
            success:function(response){
                if(response){
            // nada nose porq motivos falla el sin recargar
                }
            }
        })
        
    });
    </script>

    <!-- end moneda java scrip mas ajax-->
@stop

<!--//agregamos Java Script-->
   