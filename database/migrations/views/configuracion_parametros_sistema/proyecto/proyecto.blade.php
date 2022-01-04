<div class="container py-4">
    <div class="card w-auto" >
        <div class="card-body" >
 <div class="row">
           
           @foreach ($datos as $dato)
           <form method="POST" action="{{asset('proyecto/update')}}/{{$dato['id']}}">
               @csrf 
               <input id="id_proyecto" type="hidden" value="{{$dato['id']}}">
               <div class="mb-3">
               <label class="text-hide text-primary" >Contabilidad Por Proyectos </label> 
               <br>
               <label >habilitar Contabilidad Por Proyectos </label> 
               <select id="habilitar_contabilidad"  name="habilitar_contabilidad" required>
                   <option @if ($dato->habilitar_contabilidad == 0) {{ 'selected' }} @endif value="0">SI</option>
                   <option @if ($dato->habilitar_contabilidad == 1) {{ 'selected' }} @endif value="1">NO</option>
               </select>   
            <br>
            <br>
            <br>
            <br>
           
            </form>
            @endforeach
           <form id="forproyecto">
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
    $('#forproyecto').submit(function(e){
        e.preventDefault();
        var habilitar_contabilidad = $("#habilitar_contabilidad").val();
        var id = $("#id_proyecto").val();
        var _token2 = $("input[name=_token]").val();
        var link="{{asset('')}}"+"proyecto/update/"+id;
        $.ajax({
            url: link,
            type: "POST",
            data:{
                id:id,
                habilitar_contabilidad:habilitar_contabilidad,
                _token:_token2
            },
            success:function(response){
                if(response){
                    toastr.info('El registro de moneda fue actualizado correctamente.', 'Actualizar Registro', {timeOut:3000})        
                }
            }
        })
       var link2="{{asset('proyecto')}}";
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