<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>GLOBTECx | {{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Valor Por Defecto de Descripcción' }}">
</head>

<body>

    {{--? Llamamos a la navegation.blade.php usando los componentes de blade--}}
    {{--OjO: siempre empieza con X- seguido de la direccion del componente --}}
    <x-layouts.navegation /> 

    {{--? De la siguiente forma también se puede incluir el archivo usando plantillas navegation.blade.php--}}
    {{-- @include('components.layouts.navegation') --}}

    <pre> {{ $resultado }} {{ $sum }} </pre>

    {{--OjO -> $Slot es una variable reservada de LARAVEL --}}
    {{ $slot }}

    
    {{--? Cuando se usa signos de admración se omite la proteccion de blade para la inyección de código--}}
    {!! "<script>alert('Hello, welcome a GLOBTECx-')</script>" !!}

</body>

</html>
