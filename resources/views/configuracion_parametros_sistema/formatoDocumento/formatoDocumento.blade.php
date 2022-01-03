
@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content_header')
    <h1>Bienbenidos Compañeros De Software 2</h1> 
@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')

<div class="card w-auto" >
    <div class="card-body" >
        <div class="row">
             @foreach ($datos as $dato)
                 <form method="POST" action="{{asset('formatoDocumento/update')}}/{{$dato['id']}}">
                     @csrf
                         <input id="id_formato" type="hidden" value="{{$dato['id']}}" >
                         <br>
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
</div>


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

<!--//Contenido de nuestra pagina -->

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

<!--//agregamos css -->

@section('js')
    <script> console.log('Hi!'); </script>
@stop

<!--//agregamos Java Script-->
   