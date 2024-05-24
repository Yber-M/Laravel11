<x-layouts.section 
    title="About" 
    meta-description="ABOUT Meta Description"
>

    <h1>ABOUT CHI k no?</h1>
    <hr>
    <h1>ARRAY PRE ESTABLECIDA</h1>

    @foreach ($dtPipol as $almacenador)
        <h2 style="color: rgb(107, 155, 35)">
            {{ $almacenador['numPerson'] }}
        </h2>
    @endforeach
    
</x-layouts.section>
