
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')
<form action="{{ route('gestions.store' ) }}" method="post"  enctype="multipart/form-data">
@csrf
@include('gestions.form',['modo'=>'Crear']);
</form>

@stop
