<x-layouts.app title="BLOG" meta-description="BLOG Meta Description">

    <h1 style="color: rgb(175, 59, 59)">Este es mi primer BLOG</h1>

    {{-- @dump($posts) --}}
    <h2 style="color: green">ARREGLOS:</h2>
    @foreach ($posts as $post)
        <h3 style="color: yellow">{{ $post['title'] }}</h3>
    @endforeach

</x-layouts.app>
