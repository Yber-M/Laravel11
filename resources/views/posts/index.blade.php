<x-layouts.section 
    title="BLOG" 
    meta-description="BLOG Meta Description"
    
    >

    <h1 style="color: rgb(175, 59, 59)">Este es mi primer BLOG</h1>

    {{-- // @dump($posts) --}}
    <h2 style="color: green">ARREGLOS USANDO MIGRACIONES:</h2>

    @foreach ($posts as $post)
        <h2>
            DNI: {{ $post->dni }} <br>
            Nombre: {{ $post->title}} <br>
            <a style="text-decoration: none;" href=" {{ route('posts.show', $post) }} ">
                <button style="background: green; cursor: pointer; border-color: blueviolet;">ACCEDER</button>
            </a>
        </h2>
    @endforeach

</x-layouts.section>
