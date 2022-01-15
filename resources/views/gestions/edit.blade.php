
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
<form action="{{ route('gestions.update',$gestion)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    @include('gestions.form',['modo'=>'Editar']);
    
  @stop