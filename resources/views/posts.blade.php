<x-layout>
    <x-slot name="title">
        All Posts
    </x-slot>
    <x-slot name="content">
        @foreach($posts as $post)
        <article>
            <h1><a href="/posts/<?= $post->slug; ?>">{{ $post->title}}</a></h1>
            <p>By <a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a></p>
            <p>In <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>
        @endforeach 
    </x-slot>
</x-layout>