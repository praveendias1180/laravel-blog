<x-layout>
    <x-slot name="title">
        All Posts
    </x-slot>
    <x-slot name="content">
        @foreach($posts as $post)
        <article>
            <h1><a href="/posts/<?= $post->slug; ?>">{{ $post->title}}</a></h1>
            <p>By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></p>
            <p>In <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>
        @endforeach 
    </x-slot>
    <x-slot name="lara">

        @include('_posts-header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

            <x-post-featured-card />

            <div class="lg:grid lg:grid-cols-2">

                <x-post-card />
                <x-post-card />

            </div>

            <div class="lg:grid lg:grid-cols-3">

                <x-post-card />
                <x-post-card />
                <x-post-card />

            </div>
        </main>
    </x-slot>
</x-layout>