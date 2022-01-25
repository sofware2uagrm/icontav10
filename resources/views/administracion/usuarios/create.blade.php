
    <div class="card-body">
        <form action="{{ asset('administracion/usuarios/store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label>Nombre</label>
                        <input class="form-control" type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"
                            placeholder="Escriba su nombre de usuario " />
                        <span class="icon"><i class="lni lni-user"></i></span>
                        @error('nombre')
                            <div class="alert alert-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Correo</label>
                        <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}"
                            placeholder="Escriba su correo electrónico" />
                        @error('email')
                            <div class="alert alert-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Contraseña</label>
                        <input class="form-control" type="password" placeholder="Escriba su contraseña"
                            value="{{ old('contraseña') }}" id="contraseña" name="contraseña" />
                        @error('contraseña')
                            <div class="alert alert-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Confirmar Contraseña</label>
                        <input class="form-control" type="password" placeholder="Escriba nuevamente su contraseña"
                            value="{{ old('confirmar_contraseña') }}" id="confirmar_contraseña"
                            name="confirmar_contraseña" />
                        @error('confirmar_contraseña')
                            <div class="alert alert-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>Seleccione Rol </label>
                        <select class="form-control" id="id_rol" name="id_rol" required>
                            @foreach ($roles as $rol)
                                <option value="{{ $rol->name }}">{{ $rol->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success"> Guardar</button>
        </form>
    </div>