
@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content_header')

@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')
<br>
  <div class="container-fluid">
    <h1 class="text-center" >Control De Parametros Del Sistema</h1>   
    <br>
        <div class="d-grid gap-1 d-md-inline-block">
            <a class="btn btn-dark" href="{{asset('moneda')}}"> <i class="bi bi-coin"></i> Moneda</a>
            <a class="btn btn-dark" href="{{asset('formatoDocumento')}}"><i class="bi bi-file-earmark-bar-graph"></i> Formato De Documento</a>
            <a class="btn btn-dark" href="{{asset('firmaReporte')}}"><i class="bi bi-brush"></i> Firma De Reportes</a>
            <a class="btn btn-dark" href="{{asset('proyecto')}}"><i class="bi bi-filter-square"></i> Proyectos</a>
            <a class="btn btn-dark" href="{{asset('asientoLCV')}}"><i class="bi bi-filter-circle"></i> Asientos LCV</a>
            <a class="btn btn-dark" href="{{asset('tipoNivel')}}"> <i class="bi bi-sort-up"></i> Nivel</a>   
        </div>
    
    </div>      

    <br>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
 
 
<div class="mb-4">
    <label class=" text-primary" >Nivel</label> 
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
    
    @php($contador++)
    @endforeach
    <br>
    <form id="prueba">
        <button class="btn btn-outline-primary" type="submit"> guardar </button>
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

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
             
            success:function(response){
                window.location.href = window.location.href;
            }
        })
    });
  </script>
  
  <!-- end niveltipocuenta java scrip mas ajax-->
@stop

<!--//agregamos Java Script-->
