@props(['states', 'cities'])

<div class="select-estados">
    <select  {!! $attributes->merge([
            'class' => 'border-gray-300 focus:border-indigo-500 text-sm focus:ring-indigo-500 rounded-md shadow-sm',
            'id' => 'state'   
        ]) !!}>

        <option selected>Estado</option>
        @isset($states)
            @foreach ($states as $state)
                <option value="{{$state->id}}">{{ $state->abbreviation }}</option>
            @endforeach
        @endisset
    </select>
    
    <select {!! $attributes->merge([
                'class' => 'border-gray-300 text-sm focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm', 
                'id' => 'city', 'disabled'=> 'true'
            ]) !!}>
            
        <option selected>Cidade</option>
        @foreach ($cities as $city)
            <option value="{{$city->id}}">{{$city->name}}</option>
        @endforeach
    </select>
</div>

<script>
    let stateSelect = document.getElementById('state');
    let citySelect = document.getElementById('city');

    stateSelect.addEventListener('change', function () {
        let stateId = stateSelect.value;
        fetch(`/api/state/${stateId}/city`)
            .then(response => response.json())
            .then(data => {
                citySelect.innerHTML = '<option selected>Cidade</option>';
                data.forEach(city => {
                    let option = document.createElement('option');
                    option.value = city.id;
                    option.innerHTML = city.name;
                    citySelect.appendChild(option);
                });
                citySelect.disabled = false;
            })
    });
</script>