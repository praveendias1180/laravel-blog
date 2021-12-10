<x-layout>
    <x-slot name="title">
        {{ $post->title }}
    </x-slot>
    <x-slot name="content">
    <article>
        <h1><a href="/">{{ $post->title }}</a></h1>
        {!! $post->body !!}
    </article>
    <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    <a href="/">Go back</a>
    </x-slot>
</x-layout>