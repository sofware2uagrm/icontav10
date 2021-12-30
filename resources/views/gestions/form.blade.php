
<div class="row">
    <div class="col">   
    <label for="descripcion">descripcion</label>
    <input class="form-control" placeholder="imgrese" type="text" name="descripcion"  value="{{isset($gestion->descripcion)?$gestion->descripcion:""}}" id="descripcion">
    <br>
    <label for="fecha_ini">fecha_ini</label> 
    <input class="form-control" placeholder="imgrese"type="date" name="fecha_ini" value="{{isset($gestion->fecha_ini)?$gestion->fecha_ini:""}}" id="fecha_ini">
    <br> 
    <label for="fecha_fin">fecha_fin</label>
    <input class="form-control" placeholder="imgrese"type="date" name="fecha_fin" value="{{isset($gestion->fecha_fin)?$gestion->fecha_fin:""}}" id="fecha_fin"> 
    <br>
    <input type="submit" value="{{$modo}} datos"> 

    <a href="{{url('/gestions/')}}">volver </a> 
    