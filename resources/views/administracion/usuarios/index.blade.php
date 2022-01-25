@extends('adminlte::page')
<!--//implementa la vista de adminlte -->
@section('title' )

<!--//agregamos un titulo  -->

@section('content_header')
@stop
<!--//Agregamos un header a nuestra pagina -->

@section('content')

<div class="container-fluid">  
    <br>
<!-- Modal -->
<!-- Button trigger modal -->
        {{-- <div class="card">           ---barra para buscar-----------
            <div class="card-body">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" id="search" placeholder="Ingerese el nombre o email de un usuario">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}

        <div class="card">

            <div class="card-header">
                <label class="card-title">Usuarios Registrados</label>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        {{-- <button type="submit" class="btn btn-sm btn-primary">Nueva  <i class="nav-icon fas fa-plus"></i></button> --}}
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-user-plus"> Nuevo </i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table id="tabla_empresa"  class=" table table-bordered table-sm">
                    <thead>
                        <th> id </th>
                        <th> Usuario </th>
                        <th> Correo </th>
                        <th> Grupo de Usuario</th>
                        <th> Opción </th>
                        {{-- <th width="10px">  </th>
                        <th width="10px">  </th> --}}
                    </thead>
                    <tbody>   
                    @foreach ($usuarios as $usuario)     
                    <tr>
                        <td>{{$usuario['id']}}</td>
                        <td>{{$usuario['name']}}</td>
                        <td>{{$usuario['email']}}</td> 
                        <td>{{$usuario->roles['0']->name }}</td>
                        <td width="5px">
                            <a href="{{asset('administracion/usuarios/edit')}}/{{$usuario['id']}}" class="btn btn-success "><i class="fas fa-edit"></i></a>
                        </td>
                        <td width="5px"> 
                            <a href="{{asset('administracion/usuarios/destroy')}}/{{$usuario['id']}}" class="btn btn-danger "><i class="fas fa-trash-alt"></i></a>
                        </td>
                        <td width="5px">
                        <a class="btn btn-dark" href="{{asset('administracion/usuarios/eliminados')}}"><i class="fas fa-trash-restore-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
               
                    </tbody>
                </table>
            </div> <!--Cierra card body -->
        </div> <!--Cierra card-->
         
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h3 class="modal-title ml-auto" id="exampleModalLabel">REGISTRO DE USUARIOS</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                        @include('administracion.usuarios.create')
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
                </div> --}}
            </div>
            </div>
        </div>  <!--Cierra modal -->


</div>
@stop

<!--//Contenido de nuestra pagina -->

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

<!--//agregamos css -->

@section('js')
{{-- <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script> --}}
    <script> console.log('Hi!'); </script>
@stop
<!--//agregamos Java Script-->