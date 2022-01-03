
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

<div class="card" >
    <div class="card-body" >
      <div class="row">
@foreach ($firmaReporte as $firma)
<div class="col-sm-auto ">
   
    @php($sw=$firma['activo_opcion'])

    <div class="card text-dark bg-light mb-3  " style="max-width: 18rem;">
      <div class="card-header">{{$firma['nombre_reporte']}}</div>
        <div class="card-body">
                <form  method="POST" action="{{asset('firmaReporte/update')}}/{{$firma['id']}}">
                @csrf
                <input id="form{{$firma['id']}}id_firma" type="hidden" value="{{$firma['id']}}">
                <label for="">1ra Firma</label>
                <input type="text" class="form-control" id="form{{$firma['id']}}firma1" name="firma1" value="{{$firma['firma1']}}">
                <br>
                <label for="">2da Firma</label>
                <input type="text" class="form-control" id="form{{$firma['id']}}firma2" name="firma2"  value="{{$firma['firma2']}}">
                <br>
                <label for="">3ra Firma</label>
                <input type="text" class="form-control" id="form{{$firma['id']}}firma3" name="firma3" value="{{$firma['firma3']}}">    
                <br>
                @if ($sw==1) 
                <label for=""> firma del interesado
                    <select name="firma_interesado" id="form{{$firma['id']}}firma_interesado" value="" required>
                        <option @if ($firma->opcion_firma_enteresado == 1) {{ 'selected' }} @endif value="1">SI</option>
                        <option @if ($firma->opcion_firma_enteresado == 0) {{ 'selected' }} @endif value="0">NO</option>
                    </select>
                </label>  
                <br>  
                @else 
                <br>   
                @endif
              
               </form>  
        </div>
      </div> 
</div>
@endforeach
<br>
<br>
<form id="guardaTodoFirma">
     <button type="submit" class="btn btn-outline-primary" >guardar</button>
</form>

</div>
    </div>
</div>

<!-- niveltipocuenta java scrip mas ajax-->
<script>{{time();}}</script>
<script>
//ACTUALIZAR UN REGISTRO
$('#guardaTodoFirma').submit(function(e){
    e.preventDefault();
    var c=1;
    while (c<=4) {
    var t="#"+"form"+c;
    var firma1 = $(t+"firma1").val();
    var firma2 = $(t+"firma2").val();
    var firma3 = $(t+"firma3").val();
    var id = $(t+"id_firma").val();
    var firma_interesado = $(t+"firma_interesado").val();
    var _token2 = $("input[name=_token]").val();
    var link="{{asset('')}}"+"firmaReporte/update/"+id;
    $.ajax({
        url: link,
        type: "POST",
        data:{
            id:id,
            firma1:firma1,
            firma2:firma2,
            firma3:firma3,
            firma_interesado:firma_interesado,
            _token:_token2
        },
        success:function(response){
            if(response){
                toastr.info('El registro firma fue actualizado correctamente', 'Actualizar Registro', {timeOut:3000})        
            }
        }
    })
    c++;
   }
   var link2="{{asset('firmaReporte')}}";
 $.ajax({
      url: link2,      
      success:function(resp){
         // $("#contenido").html(resp);   
      }
  })
});
</script>
<!-- end niveltipocuenta java scrip mas ajax-->
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




  
   