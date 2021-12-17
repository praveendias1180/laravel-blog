<x-layout>
    <x-slot name="content">
        <section class="px-6 py-8">
            <x-panel class="max-w-sm mx-auto">
            <form method="POST" action="/admin/posts">
                @csrf
                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                    for="title" >
                    Title
                </lable>
                <input class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="title"
                    id="title"
                    value="{{ old("title") }}"
                    required />

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <lable class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                    for="slug" >
                    Slug
                </lable>
                <input class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="slug"
                    id="slug"
                    value="{{ old("title") }}"
                    required />

                @error('slug')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                <lable class="block mt-3 mb-2 uppercase font-bold text-xs text-gray-700" 
                    for="excerpt" >
                    Excerpt
                </lable>
                <textarea name="excerpt" 
                    rows="5"
                    class="w-full focus:outline-none focus:ring" 
                    placeholder="The Excerpt"
                    required >{{ old("excerpt") }}</textarea>
                
                @error('excerpt')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror

                <lable class="block mt-3 mb-2 uppercase font-bold text-xs text-gray-700" 
                    for="body" >
                    Body
                </lable>
                <textarea name="body" 
                    rows="5"
                    class="w-full focus:outline-none focus:ring" 
                    placeholder="The Excerpt"
                    required >{{ old("body") }}</textarea>
                
                @error('body')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror

                <lable class="block mt-3 mb-2 uppercase font-bold text-xs text-gray-700" 
                    for="category_id" >
                    Category
                </lable>


                <select name="category_id">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : ''}}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                
                @error('category')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror

                <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                    <x-submit-button>Publish</x-submit-button>
                </div>
            </form>
            </x-panel>
        </section>
    </x-slot>
</x-layout>