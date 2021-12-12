<x-layout>
    <x-slot name="title">
        All Posts
    </x-slot>
    <x-slot name="lara">
        @foreach($posts as $post)
        <article>
            <h1><a href="/posts/<?= $post->slug; ?>">{{ $post->title}}</a></h1>
            <p>By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></p>
            <p>In <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>
        @endforeach 
    </x-slot>
    <x-slot name="content">

        @include('_posts-header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

            @if ($posts->count())

            <x-posts-grid :posts="$posts" />
            @else
                <p>No posts yet. Please check back later.</p>
            @endif

        </main>
    </x-slot>
</x-layout>