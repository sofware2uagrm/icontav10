
@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content')
    <input type="hidden" id="idgrupousuario" value="{{ $idgrupousuario }}" />
    <div id="GrupoUsuarioEdit"> </div>
@endsection

@section('js') 
    <script src="/js/grupousuario_edit.js"></script>
@endsection