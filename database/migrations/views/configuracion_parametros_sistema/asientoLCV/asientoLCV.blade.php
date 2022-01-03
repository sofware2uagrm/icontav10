<div class="container py-4">
    <div class="card w-auto" >
        <div class="card-body" >
           <div class="row">
           
                @foreach ($datos as $dato)
                        <form method="POST" action="{{asset('asientoLCV/update')}}/{{$dato['id']}}">
                            @csrf 
                            <input id="id_asiento" type="hidden" value="{{$dato['id']}}">
                            <div class="mb-3">
                                <label class="text-hide text-primary" >Modalidad de Asientos Automaticos LCV</label> 
                            </div>
                            <br>
                            <label >Generar Asientos Contables Automaticos para LCV </label> 
                            <select id="generar_asientos"  name="generar_asientos" required>
                                <option @if ($dato->generar_asientos == 0) {{ 'selected' }} @endif value="0">NINGUNO</option>
                                <option @if ($dato->generar_asientos == 1) {{ 'selected' }} @endif value="1">ITERACTIVO</option>
                                <option @if ($dato->generar_asientos == 2) {{ 'selected' }} @endif value="2">AUTOMATICO</option>
                            </select>   
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