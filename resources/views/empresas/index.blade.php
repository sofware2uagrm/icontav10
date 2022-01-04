
@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content_header')
    <h1>Bienbenidos Compañeros De Software 2</h1> 
@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')
@if(Session::has('mensaje'))
 {{Session::get('mensaje')}}
 @endif
 
 <div><a class="btn btn-secondary" href="{{url('/empresas/create')}}">NUEVO  REGISTRO</a> </div>
 <table id="empresatable" class="table table-light">
         <thead class="thead-light">
             <tr>
                 <th>#</th>
                 <th>logo</th>
                 <th>Razon social</th>
                 <th>nit</th>
                 <th>celular</th>
                 <th>ciudad </th>
 
                 <th>actividad</th>
                 <th>responsable</th>
                 <th>ci_responsable</th>
                 <th>sucursal</th>
                 <th>estado</th>             
                 <th></th>
                 <th></th>
             </tr>
         </thead>
         <tbody>
             @foreach( $empresas as $empresa)
             <tr>
                 <td> {{ $empresa->id}}</td>
                 <td> 
                 <img src="{{Storage::url($empresa->logo)}}" width="100" alt="">    
                 </td>
 
                 <td> {{ $empresa->razonsocial}}</td>
                 <td> {{ $empresa->nit}}</td>
                 <td> {{ $empresa->telefono}}</td>
                 <td> {{ $empresa->ciudad}}</td>
               
               <td>{{ $empresa->actividad}}</td>
               <td>{{ $empresa->responsable}}</td>
               <td>{{ $empresa->ci_responsable}}</td>
               <td>{{ $empresa->sucursal}}</td>
               <td>{{ $empresa->estado}}</td>
                 
                 <td>
                     <a class ="btn btn-primary btn-sm" href="{{ route('empresas.edit',$empresa) }}">Editar</a>   
 
                 </td>
                 <td> 
                     <form action="{{ route('empresas.destroy',$empresa) }}" method="post">
                     @csrf
                     {{method_field('DELETE')}} 
                     <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">   
                     </form>
               
                 </td> 
             </tr>
             @endforeach
         </tbody>
 </table>
 
 @stop

 @section('css')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">   
 
 @endsection
 
 @section('js') 
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
 
 <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
 
 <script>
 $(document).ready(function() {
     $('#empresatable').DataTable(
         {
 
             responsive:true,
             autoWhidh:false,
         
     
         "language": {
             "lengthMenu": "Mostrar _MENU_ registros por paginas",
             "zeroRecords": "nada encontrado - disculpa",
             "info": "Mostrando la pagina _PAGE_ de _PAGES_",
             "infoEmpty": "No records available",
             "infoFiltered": "(filtered from _MAX_ registros totales)",
             'search':'buscar:',
             'paginate':{
             'next':'siguiente',
             'previous':'anterior'
         }
         }
             }    );
 } );
 
 
 
 
 </script>
     
 @endsection
 