
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

<div class="mb-4">
<label class="text-hide text-primary" >Nivel</label> 
</div>



@php($sw=1)

@php( $codigo="")
@php($cad="")
@php( $c=1)

@foreach( $datos as $dato ) 
@php($c=1 )
  @while ($c <= $dato->tipoNivel ) 
     @php($cad=$cad ."x" )
    @php($c=$c+1)
  @endwhile

@php($codigo=$codigo .".". $cad ) 
@if($sw==1)
   @php($sw=0)
   @php($codigo=$cad)
@endif

@php($cad="")

@endforeach


<div  class="mb-3">
<input  class="form-control fs-4"  type="text" value="{{$codigo}}">
</div>

@php($contador=1)
@foreach ($datos as $dato)


<br>

<form name="form{{$contador}}" id="form{{$contador}}" method="POST" action="{{asset('tipoNivel/update')}}/{{$dato['id']}}">
    @csrf 
    <input id="form{{$contador}}id_nivel" type="hidden" value="{{$dato['id']}}">

    <label >nivel {{ $dato->nivel }}  </label> 
    <select id="form{{$dato['id']}}Tipo_nivel"  name="form{{$dato['id']}}Tipo_nivel" required>
        <option @if ($dato->tipoNivel == 1) {{ 'selected' }} @endif value="1">1</option>
        <option @if ($dato->tipoNivel == 2) {{ 'selected' }} @endif value="2">2</option>
        <option @if ($dato->tipoNivel == 3) {{ 'selected' }} @endif value="3">3</option>
        <option @if ($dato->tipoNivel == 4) {{ 'selected' }} @endif value="4">4</option>
        <option @if ($dato->tipoNivel == 5) {{ 'selected' }} @endif value="5">5</option>
        <option @if ($dato->tipoNivel == 6) {{ 'selected' }} @endif value="6">6</option>
    </select>   
 </form>
<br>
@php($contador++)
@endforeach
<br>
<br>
<form id="prueba">
    <button class="btn btn-outline-primary" type="submit"> guardar </button>
</form>

</div>
</div>
</div>



<!-- niveltipocuenta java scrip mas ajax-->
<script>{{time();}}</script>

<script>
//ACTUALIZAR UN REGISTRO
$('#prueba').submit(function(e){
    e.preventDefault();
    var c=1;
    var n="{{$contador}}";
    while (c<=n) {
    var t="#"+"form"+c;
    var tipo = $(t+"Tipo_nivel").val();
    var id = $(t+"id_nivel").val();
    var _token2 = $("input[name=_token]").val();
    var link="{{asset('')}}"+"tipoNivel/update/"+id;
    
    $.ajax({
        url: link,
        type: "POST",
        data:{
            id:id,
            tipo:tipo,
            _token:_token2
        },
        success:function(response){
            if(response){
                toastr.info('El registro nivel fue actualizado correctamente.', 'Actualizar Registro', {timeOut:3000})        
            }
        }

    })
    c++;
   }
   var link2="{{asset('')}}"+"tipoNivel";
 
   $.ajax({
        url: link2,      
        success:function(resp){

            $("#contenido").html(resp);
           
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


   

<div  class="container py-4">
    
    

   