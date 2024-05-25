<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GLOBTECx | {{ $title ?? 'Sin titulo' }}</title>
    
    {{-- OjO -> Se usa camelCase para referenciar la propiedad --}}
    <meta name="description" content="{{ $metaDescription ?? 'No tiene metadescription' }}">
</head>

<body>

    <x-layouts.navegation />

    {{-- OjO -> $Slot es una variable reservada de LARAVEL --}}
    {{ $slot }}

</body>

</html>
