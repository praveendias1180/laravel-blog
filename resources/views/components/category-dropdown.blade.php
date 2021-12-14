<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <x-dropdown>
        <x-slot name="trigger">
            <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left lg:inline-flex">
                {{ isset($currentCategory) ? $currentCategory->name : 'Categories'}}
                <x-icon name="down-arrow" class="absolute pointer-events-none">
                    </x-down-arrow>
            </button>
        </x-slot>
        <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>
        @foreach($categories as $category)
        <x-dropdown-item 
            href="/?category={{ $category->slug }}&{{http_build_query(request()->except('category'))}}" 
            :active="request()->is('categories/' . $category->slug)"
        >{{ ucwords($category->name) }}</x-dropdown-item>
        @endforeach
    </x-dropdown>
</div>