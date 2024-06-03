<x-layouts.posts title="Añadir" meta-description="En esta sección podrás añadir un nuevo post">

    <style>
        body {
            padding: 1rem;
        }
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

    <form action=" {{ route('posts.update', $post) }} " method="POST">
        @csrf {{-- OjO: Proteccion contra CSRF, usar cada ves que se usa POST. Si no saldrá error 419 --}}
        @method('PATCH') {{--OjO: Sistema de Laravel para que reciba peticiones PATCH --}}
        <h1>POST EDITADO -> ID: {{ $post->id}}</h1>
        Correo:
        <input type="email" name="correo" id="correo" value="{{ old('correo', $post->correo) }}" maxlength="100">
        {{-- ? Mostrar error segun su NAME --}}
        @error('correo')
            <small style="color: red"> {{ $message }} </small>
        @enderror
        <br><br>

        DNI:
        <input type="number" name="dni" id="dni" value="{{ old('dni', $post->dni) }}" maxlength="8" pattern="\d{8}">
        @error('dni')
            <small style="color: red"> {{ $message }} </small>
        @enderror
        <br><br>

        Nombre:
        <input type="text" name="nombre" id="nombre" value=" {{ old('nombre', $post->nombre) }} " maxlength="255">
        @error('nombre')
            <small style="color: red"> {{ $message }} </small>
        @enderror
        <br><br>

        Edad:
        <input type="number" name="edad" id="edad" value="{{ old('edad', $post->edad) }}">
        @error('edad')
            <small style="color: red"> {{ $message }} </small>
        @enderror
        <br><br>

        Título:
        <input type="text" name="titulo" id="titulo" value=" {{ old('titulo', $post->title) }} " maxlength="255">
        @error('titulo')
            <small style="color: red"> {{ $message }} </small>
        @enderror
        <br><br>

        Descripción: <br>
        <textarea style="resize: none" name="cuerpo" id="cuerpo" cols="60" rows="15" maxlength="2000">{{ old('cuerpo', $post->cuerpo) }}</textarea>
        @error('cuerpo')
        <br>
            <small style="color: red"> {{ $message }} </small>
        @enderror
        <br><br>

        {{-- ! Mostrar errores de validación --}}
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <h2>Error al ingresar los datos</h2>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <p>Por favor, intente nuevamente teniendo en cuenta estos problemas.</p>
            </div>
        @endif --}}

        <button type="submit">ACTUALIZAR</button>
        <a href=" {{ route('posts.index') }} ">CANCELAR Y VOLVER</a>
    </form>

</x-layouts.posts>
