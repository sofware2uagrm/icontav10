




@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content_header')
    <h1>Bienbenidos Compañeros De Software 2</h1> 
@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')
















<form action="{{ route('empresas.update',$empresa)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    @include('empresas.form',['modo'=>'Editar']);
    




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
 