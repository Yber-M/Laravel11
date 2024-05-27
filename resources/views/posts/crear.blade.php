<x-layouts.posts 
    title="Añadir" 
    meta-description="En esta sección podrás añadir un nuevo post">
    
    <form action=" {{ route('posts.store') }} " method="POST">
        @csrf {{--OjO: Proteccion contra CSRF, usar cada ves que se usa POST. Si no saldrá error 419--}}
        Correo <br> <br> <input type="email" name="correo" id="correo" required><br> <br>
        DNI: <br> <br> <input type="number" name="dni" id="dni" maxlength="8" pattern="\d{8}" required><br> <br>
        Nombre: <br> <br> <input type="text" name="nombre" id="nombre" required><br> <br>
        Edad: <br> <br> <input type="number" name="edad" id="edad" required><br> <br>
        Título: <br> <br> <input type="text" name="title" id="title" required><br> <br>
        Descripción: <br> <br>
        <textarea name="cuerpo" id="cuerpo" cols="50" rows="20" maxlength="2000" required></textarea><br> <br>

        <button type="submit">ENVIAR</button>
    </form>

</x-layouts.posts>
