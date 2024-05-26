<x-layouts.posts
    :title="$post->title"
    :meta-description="$post->dni"
>

    <h1>Datos del Post</h1>
    <p>DNI: {{ $post->dni }}</p>
    <p>Titulo: {{ $post->title }}</p>
    <p>Fecha de creación: {{ $post->created_at }}</p>
    <button><a href=" {{ route('posts.index') }} ">VOLVER</a></button>

</x-layouts.posts>
