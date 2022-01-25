
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
                <a class="btn btn-dark" href="{{asset('asientoLCV')}}"><i class="bi bi-filter-circle"></i> Asientos RCV</a>
                <a class="btn btn-dark" href="{{asset('tipoNivel')}}"> <i class="bi bi-sort-up"></i> Nivel</a>   
            </div>
            <div class="card">
                <div class="card-body">
                    @foreach ($datos as $dato)
                        <form  method="POST" action="{{asset('moneda/update')}}/{{$dato['id']}}">
                            @csrf 
                            <input id="id_moneda" type="hidden" value="{{$dato['id']}}">
                            <label >Moneda </label> 
                            <select  id="tipo_moneda"  name="tipo_moneda" required>
                                <option @if ($dato->tipo_moneda == 0) {{ 'selected' }} @endif value="0">BOLIVIANOS</option>
                                <option @if ($dato->tipo_moneda == 1) {{ 'selected' }} @endif value="1">DOLARES</option>
                                <option @if ($dato->tipo_moneda == 2) {{ 'selected' }} @endif value="2">BOLIVIANOS/DOLARES</option>
                            </select>   
                        <br>
                        <br>
                        <br>
                        <br>
                        </form>
                    @endforeach
            
                    <form id="formoneda">
                        @csrf
                        <button type="submit" class=" btn btn-outline-primary">guardar</button>
                        <a href="" class=" btn btn-outline-success">cancelar</a>
                    </form>
                </div>
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
$('#formoneda').submit(function(e){
    e.preventDefault();
    var tipo_moneda = $("#tipo_moneda").val();
    var id = $("#id_moneda").val();
    var _token2 = $("input[name=_token]").val();
    var link="{{asset('')}}"+"moneda/update/"+id;
    $.ajax({
        url: link,
        type: "POST",
        cache: false,
        async: false,
        data:{
            id:id,
            tipo_moneda:tipo_moneda,
            _token:_token2
        },
        success:function(response){
            if(response){
                toastr.info('El registro de moneda fue actualizado correctamente.', 'Actualizar Registro', {timeOut:3000})        
            }
        }
    })
   var link2="{{asset('moneda')}}";
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
@stop

<!--//agregamos Java Script-->
