<x-layouts.posts
    :title="$post->title"
    :meta-description="$post->dni"
>

    <h1>Datos del Post N° {{ $post->id }}</h1>
    <p>DNI: {{ $post->dni }}</p>
    <p>Titulo: {{ $post->title }}</p>
    <p>Fecha de creación: {{ $post->created_at }}</p>
    
    <a href=" {{ route('posts.index') }}">
        <button style="background: green; cursor: pointer; border-color: blueviolet;"> VOLVER </button>
    </a>

</x-layouts.posts>
