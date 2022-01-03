
@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content_header')
    <h1>Bienbenidos Compañeros De Software 2</h1> 
@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')

<div class="text-center ">
    <h3 class="text-primary badge fs-2 ">Control De Parametros Del Sistema</h3>
 </div>
  <div class="d-grid gap-1 d-md-inline-block">
        <a class="btn btn-dark" href="{{asset('moneda')}}"> <i class="bi bi-coin"></i> Moneda</a>
        <a class="btn btn-dark" href="{{asset('formatoDocumento')}}"><i class="bi bi-file-earmark-bar-graph"></i> Formato De Documento</a>
        <a class="btn btn-dark" href="{{asset('firmaReporte')}}"><i class="bi bi-brush"></i> Firma De Reportes</a>
        <a class="btn btn-dark" href="{{asset('proyecto')}}"><i class="bi bi-filter-square"></i> Proyectos</a>
        <a class="btn btn-dark" href="{{asset('asientoLCV')}}"><i class="bi bi-filter-circle"></i> Asientos LCV</a>
        <a class="btn btn-dark" href="{{asset('tipoNivel')}}"> <i class="bi bi-sort-up"></i> Nivel</a>   
  </div>

  <div class="card w-auto" >
    <div class="card-body" >
       <div class="row">
            @foreach ($datos as $dato)
            <form  method="POST" action="{{asset('moneda/update')}}/{{$dato['id']}}">
                @csrf 
                <input id="id_moneda" type="hidden" value="{{$dato['id']}}">
                <label >Moneda </label> 
                <select id="tipo_moneda"  name="tipo_moneda" required>
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
            <br>
            <form id="formoneda" >
                <button type="submit" class=" btn btn-outline-primary">guardar</button>
                <a href="" class=" btn btn-outline-success">cancelar</a>
            </form>
       </div>
    </div>
</div>
</div>
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

<!-- end moneda java scrip mas ajax-->
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
