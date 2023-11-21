@props(['type' => 'text', 'name'])

<input  
    type="{{ $type }}"
    name="{{ $name }}"
    {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
