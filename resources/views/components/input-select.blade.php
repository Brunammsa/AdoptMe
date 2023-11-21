@props([])

<select  {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm', 
        'name' => 'size', 
        'id'=> 'size']) !!}>
    <option>Pequeno</option>
    <option>Médio</option>
    <option>Grande</option>
</select>