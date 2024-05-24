<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GLOBTECx | {{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Valor Por Defecto de Descripcción' }}">
</head>

<body>

    {{--? Llamamos a la navegation.blade.php usando los componentes de Laravel--}}
    <x-layouts.navegation /> 

    {{--? De la siguiente forma también se puede incluir el archivo usando plantillas navegation.blade.php--}}
    @include('components.layouts.navegation')

    <pre> {{ $resultado }} {{ $sum }} </pre>

    {{--TODO -> $Slot es una variable reservada de LARAVEL --}}
    {{ $slot }}

    
    {{--? Cuando se usa signos de admración se omite la proteccion de blade para la inyección de código--}}
    {!! "<script>alert('security problem')</script>" !!}

</body>

</html>
