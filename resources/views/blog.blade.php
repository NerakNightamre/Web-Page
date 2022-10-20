<x-layouts.app title="Blog">

    <h1>Blog</h1>

    <a href=" {{ route('posts.create') }} ">Create New Post</a>

    @foreach ($posts as $post)
        <h1>
            <a href="{{ route('posts.show', $post->id) }}">
                {{ $post->title }}
            </a>
        </h1>
    @endforeach
</x-layouts.app>
