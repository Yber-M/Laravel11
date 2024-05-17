<x-layouts.app title="BLOG" meta-description="BLOG Meta Description">

    <h1>Este es mi primer BLOG</h1>

    @dump($posts)

    @foreach ($posts as $post)
        <h2>{{ $post['title'] }}</h2>
    @endforeach
    
</x-layouts.app>
