@props(['active' => false])

@php

    $classes = 'hover:text-white focus:text-white focus:bg-blue-500 hover:bg-blue-500 block text-left px-3 text-xs leading-7';
    $classes .= $active ? ' bg-blue-500 text white' : '';

@endphp

<a {{ $attributes(['class' => $classes])}}>{{ $slot }}</a>