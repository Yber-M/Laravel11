<x-layouts.posts title="Añadir" meta-description="En esta sección podrás añadir un nuevo post">

    <style>
        a {
            text-decoration: none;
            color: black;
            border: 1px solid white;
            border-radius: 2px;
            font-size: 14px;
            padding: 2px 4px;
            background: yellow;
            font-family: arial;
        }
        textarea {
            resize: none;
        }
    </style>

    <form action=" {{ route('posts.store') }} " method="POST">
        @csrf {{-- OjO: Proteccion contra CSRF, usar cada ves que se usa POST. Si no saldrá error 419 --}}

        
        Correo: <br><br>
        <input type="email" name="correo" id="correo" value="{{ old('correo') }}" maxlength="100" required> <br><br>

        DNI: <br><br>
        <input type="number" name="dni" id="dni" value="{{ old('dni') }}" maxlength="8" pattern="\d{8}" required> <br><br>

        Nombre: <br><br> 
        <input type="text" name="nombre" id="nombre" value=" {{ old('nombre') }} " maxlength="255" required> <br><br>

        Edad: <br><br>
        <input type="number" name="edad" id="edad" value="{{ old('edad') }}" required><br><br>

        Título: <br><br>
        <input type="text" name="titulo" id="titulo" value=" {{ old('titulo') }} " maxlength="255" required><br> <br>

        Descripción: <br><br>
        <textarea style="resize: none" name="cuerpo" id="cuerpo" cols="60" rows="15" maxlength="2000" required>{{ old('cuerpo') }}</textarea><br><br>

        {{-- ! Mostrar errores de validación --}}
        @if ($errors->any())
        <div class="alert alert-danger">
                    <h2>Error al ingresar los datos</h2>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    <p>Por favor, intente nuevamente teniendo en cuenta estos problemas.</p>
                </div>
        @endif

        <button type="submit">ENVIAR</button>
        <a href=" {{ route('posts.index') }} ">CANCELAR Y VOLVER</a>
    </form>

</x-layouts.posts>
