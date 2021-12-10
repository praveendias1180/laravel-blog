<x-layout>
    <x-slot name="title">
        {{ $post->title }}
    </x-slot>
    <x-slot name="content">
        <article>
            <h1><a href="/">{{ $post->title }}</a></h1>
            {!! $post->body !!}
            <p>
                By <a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a> in 
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a><br />
                <a href="/">Go back</a>
            </p>
        </article>
    </x-slot>
</x-layout>