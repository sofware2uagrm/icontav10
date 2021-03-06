
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
       
            @foreach ($datos as $dato)
                    <form method="POST" action="{{asset('asientoLCV/update')}}/{{$dato['id']}}">
                        @csrf 
                        <input id="id_asiento" type="hidden" value="{{$dato['id']}}">
                        <br>
                         <label class="text-primary " >Modalidad de Asientos Automaticos LCV</label> 
                         <br>
                        <div class="mb-3">
                        <label >Generar Asientos Contables Automaticos para LCV </label> 
                        <select id="generar_asientos"  name="generar_asientos" required>
                            <option @if ($dato->generar_asientos == 0) {{ 'selected' }} @endif value="0">NINGUNO</option>
                            <option @if ($dato->generar_asientos == 1) {{ 'selected' }} @endif value="1">ITERACTIVO</option>
                            <option @if ($dato->generar_asientos == 2) {{ 'selected' }} @endif value="2">AUTOMATICO</option>
                        </select> 
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                    </form>
             @endforeach
            <form id="forasiento">
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

<!-- moneda java scrip mas ajax-->
<script>{{time();}}</script>
<script>
//ACTUALIZAR UN REGISTRO
$('#forasiento').submit(function(e){
    e.preventDefault();
    var generar_asientos = $("#generar_asientos").val();
    var id = $("#id_asiento").val();
    var _token2 = $("input[name=_token]").val();
    var link="{{asset('')}}"+"asientoLCV/update/"+id;
    $.ajax({
        url: link,
        type: "POST",
        data:{
            id:id,
            generar_asientos:generar_asientos,
            _token:_token2
        },
        success:function(response){
            if(response){
                toastr.info('El registro de asiento LCV fue actualizado correctamente.', 'Actualizar Registro', {timeOut:3000})        
            }
        }
    })
   var link2="{{asset('asientoLCV')}}";
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


   