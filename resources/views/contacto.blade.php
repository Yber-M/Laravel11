{{--OjO -> <x-layouts.section/> es equivalente a @component('components.layouts.section') --}}

@component('components.layouts.section')

    {{--? Lo bueno del componente de blade es qye se puede agregar otras propiedades dentro --}}
    <x-layouts.section 
    {{-- OjO -> No se puede usar las propiedades del componente --}}
        title="Contácto" 
        meta-description="Contacto Meta Description"> {{-- ? Se usa snake-case para llamar al atributo--}}
            
            <h1>Acá me puedes contactar</h1>

    </x-layouts.section>
@endcomponent
