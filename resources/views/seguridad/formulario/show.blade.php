
@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content')
    <input type="hidden" id="idformulario" value="{{ $idformulario }}" />
    <div id="FormularioShow"> </div>
@endsection

@section('js') 
    <script src="/js/formulario_show.js"></script>
@endsection