

@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content_header')
    <h1>Bienbenidos Compañeros De Software 2</h1> 
@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')
<form action="{{ route('gestions.update',$gestion)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    @include('gestions.form',['modo'=>'Editar']);
    
  @stop