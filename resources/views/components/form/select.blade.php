@props(['name', 'options'])

<x-form.field >
    <x-form.label name="{{ $name }}"/>

        <select name="category_id">
            @foreach ($options as $option)
                <option value="{{ $option->id }}"
                    {{ old('category_id') == $option->id ? 'selected' : ''}}
                >{{ ucwords($option->name) }}</option>
            @endforeach
        </select>

    <x-form.error name="{{ $name }}"/>
</x-form.field>


