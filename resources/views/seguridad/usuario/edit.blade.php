
@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )
<!--//agregamos un titulo  -->

@section('content')
    <input type="hidden" id="idusuario" value="{{ $idusuario }}" />
    <div id="UsuarioEdit"> </div>
@endsection

@section('js') 
    <script src="/js/usuario_edit.js"></script>
@endsection