<select id="state" {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
    <option selected>Selecione o Estado</option>
    @isset($states)
        @foreach ($states as $state)
            <option value="{{$state->id}}">{{ $state->abbreviation }}</option>
        @endforeach
    @endisset

</select>

<select {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm', 'id' => 'city', 'disabled'=> 'true']) !!}>
    <option selected>Cidade</option>
</select>

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