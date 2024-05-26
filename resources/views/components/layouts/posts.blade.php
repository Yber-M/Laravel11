<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos | {{ $title ?? 'User' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Valor Por Defecto de Descripcción' }}">
</head>

<body>

    {{ $slot }}

</body>

</html>
