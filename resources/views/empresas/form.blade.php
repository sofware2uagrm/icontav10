
<div class="row">
    <div class="col">   
    <label for="razonsocial">razonsocial</label>
    <input  placeholder="imgrese" type="text" name="razonsocial"  value="{{isset($empresa->razonsocial)?$empresa->razonsocial:""}}" id="razonsocial">
    <br>
    <label for="nit">nit</label> 
    <input  placeholder="imgrese"type="text" name="nit" value="{{isset($empresa->nit)?$empresa->nit:""}}" id="nit">
    <br> 
    <label for="telefono">telefono</label>
    <input  placeholder="imgrese"type="text" name="telefono" value="{{isset($empresa->telefono)?$empresa->telefono:""}}" id="telefono"> 
    <br>
    <label for="ciudad">ciudad</label>
    <input  placeholder="imgrese"type="text" name="ciudad" value="{{isset($empresa->ciudad)?$empresa->ciudad:""}}" id="ciudad"> 
    <br>
    <label for="actividad">actividad</label>
    <input  placeholder="imgrese"type="text" name="actividad" value="{{isset($empresa->actividad)?$empresa->actividad:""}}" id="actividad"> 
    <br>
    
    </div>
    <div class="col">
    <label for="responsable">responsable</label>
    <input  placeholder="imgrese" type="text" name="responsable" value="{{isset($empresa->responsable)?$empresa->responsable:""}}" id="responsable"> 
    <br>
    <label for="ci_responsable">ci_responsable</label>
    <input  placeholder="imgrese" type="text" name="ci_responsable" value="{{isset($empresa->ci_responsable)?$empresa->ci_responsable:""}}" id="ci_responsable"> 
    <br>
    <label for="sucursal">sucursal</label>
    <input  placeholder="imgrese" type="text" name="sucursal" value="{{isset($empresa->sucursal)?$empresa->sucursal:""}}" id="sucursal"> 
    <br>
    
    <label for="estado">estado</label>
    <select name="estado" id="estado" >
        
        <option value="{{isset($empresa->estado)?$empresa->estado:""}}">{{isset($empresa->estado)?$empresa->estado:""}}</option>
        <option value="activo">activo</option>
        <option value="inactivo">inactivo</option>
        
    </select>
    <br>
    
    <label for="logo">logo</label>
    @if(isset($empresa->logo))
    
    <img id="blah" src="{{env('APP_URL')}}{{$empresa->logo}}" width="180" alt="">
        
    @else
        
    <img id="blah" src="https://img2.freepng.es/20180423/jee/kisspng-accountant-accounting-cartoon-accounting-financial-5ade05d54ec3d5.5356307815244999253226.jpg" width="180" alt="">
    @endif
    </div>
    
    <br>
    
    </div>
    <div>  
    
    
    <input type="file" name="logo" value="" id="imgInp"> 
     
    <br>
    <input type="submit" value="{{$modo}} datos"> 
    
    <a href="{{url('/empresas/')}}">volver </a> 
</div>
  