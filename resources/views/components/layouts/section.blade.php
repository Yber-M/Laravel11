<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>GLOBTECx | {{ $title ?? 'Sin titulo' }}</title>

    {{-- OjO -> Se usa camelCase para referenciar la propiedad --}}
    <meta name="description" content="{{ $metaDescription ?? 'No tiene metadescription' }}">
</head>

<body>

    <x-layouts.navegation />
    {{-- ?* Mensajes de aprobacion de procesos --}}
    @if (session('success'))
        <div class="alert alert-success">
            <h2>Registrado Correctamente</h2>
            {{ session('success') }}
        </div>
    @endif
    {{-- OjO -> $Slot es una variable reservada de LARAVEL --}}
    {{ $slot }}

</body>

</html>
