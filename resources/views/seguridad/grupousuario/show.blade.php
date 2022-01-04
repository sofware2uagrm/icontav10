
@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content')
    <input type="hidden" id="idgrupousuario" value="{{ $idgrupousuario }}" />
    <div id="GrupoUsuarioShow"> </div>
@endsection

@section('js') 
    <script src="/js/grupousuario_show.js"></script>
@endsection