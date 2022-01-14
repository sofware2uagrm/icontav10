@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content_header')
    
@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')

    <div class="container-fluid">
        <h1 class="text-center" >Eliminacion de Registros</h1>   
        <br>

        <div class="card">
            <div class="card-body">
                    <div class="box">
                        <div class="box-body">
            
                            <div class="checkbox">
                                    
                                <table class="table table-bordered table-hover table-striped">
                
                                    <tbody>
                
                                        <form action="{{asset('eliminacion/eliminar')}}" method="POST">
                                            @csrf
                
                                            <div>
                                                <div class="form-group form-check">
                                                
                                                    <input type="checkbox" name="eliminar[0]" value="0"> <label >Datos Generales de la Empresa </label> <br>
                                                    <input type="checkbox" name="eliminar[1]" value="1"> <label >Registro de Cotizaciones ($us, UFV)</label> <br>
                                                    <input type="checkbox" name="eliminar[2]" value="2"> <label >Registro de Comprobantes</label> <br>
                                                    <input type="checkbox" name="eliminar[3]" value="3"> <label >Plan de Cuentas</label> <br>
                                                    <input type="checkbox" name="eliminar[4]" value="4"> <label >Registro de Proyectos</label> <br>
                                                    <input type="checkbox" name="eliminar[5]" value="5"> <label >Libros de Compras y Ventas IVA</label> <br>
                                                    <input type="checkbox" name="eliminar[6]" value="6"> <label >Bancarizacion - Libros Auxiliares</label> <br>
                                                    <br>
                                                    <button type="submit"  class="btn btn-outline-danger">eliminar registro</button>
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
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