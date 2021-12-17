@props(['name'])

<x-form.field >
    <x-form.label name="{{ $name }}"/>

    <textarea name="{{ $name }}" 
        rows="5"
        class="w-full focus:outline-none focus:ring border border-gray-200 rounded" 
        required >{{ old($name) }}</textarea>
    
    <x-form.error name="{{ $name }}"/>
</x-form.field>