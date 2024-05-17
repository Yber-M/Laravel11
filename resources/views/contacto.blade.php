<x-layouts.app title="Contacto" meta-description="Contacto Meta Description">
    <h1>Acá me puedes contactar</h1>

    @foreach ($posts as $post)
        <h2> {{ $post['title'] }} </h2>
    @endforeach

</x-layouts.app>
