@props(['comment'])

<x-panel class="bg-gray-50">
<article class="flex space-x-4">
    <div class="flex-shrink-0">
        <!-- <img src="https://picsum.photos/60/60?random={{ $comment->id }}" alt="" width="60" height="60" class="rounded-xl"/> -->
        <img src="https://i.pravatar.cc/60?u={{ $comment->id }}" alt="" width="60" height="60" class="rounded-xl"/>
    </div>
    <div class="col-span-5">
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <p class="text-xs">Posted
                <time>{{ $comment->created_at }}</time>
            </p>
            <p>
                {{ $comment->body }}

            </p>
        </header>
    </div>
</article>
</x-panel>