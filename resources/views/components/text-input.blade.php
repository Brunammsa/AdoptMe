@props(['id', 'name', 'value', 'type' => 'text'])

<input type="{{ $type }}"
    id="{{ $id }}"
    name="{{ $name }}"
    value="{{ isset($value) ? $value : '' }}"
    {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
