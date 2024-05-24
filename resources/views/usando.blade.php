<x-layouts.section
    title="Usando Controlador"
    meta-description="Esta es la meta description de Usando Controlador"
>

    <h1>Estoy usando el controlador</h1>
    <hr>
    <h2>Imprimiendo Nombres[array]:</h2>

    @foreach ($dtPipolName as $almacenador)
    <h2 style="color: rgb(107, 155, 35)">
        {{ $almacenador['namePerson'] }}
    </h2>
@endforeach
</x-layouts.section>