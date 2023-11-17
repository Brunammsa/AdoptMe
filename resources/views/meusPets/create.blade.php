<x-app-layout>
    
    <section class="section-create">
        <div class="cabecalho-novoPet">
            <h1 class=" mb-4 mt-20">Cadastro do pet:</h1>
            <img src="{{ asset('images/Patas.png') }}" alt="imagem patas" class="patas">
        </div>
        <form action="/meusPets/salvar" class="form-create" method="POST">
            @csrf
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full mb-4" 
                type="text" 
                name="name" 
                required autofocus autocomplete="name"
                placeholder="ex.: floquinho" />
            </div>
            <div>
                <x-input-label for="age" :value="__('Idade')" />
                <x-text-input id="age" class="block mt-1 w-full mb-4" 
                type="text" 
                name="age" 
                required autofocus autocomplete="age"
                placeholder="ex.: 5 meses/anos" />
            </div>
            <div>
                <?php $porte = ['Pequeno', 'Médio', 'Grande'] ?>
                <x-input-label for="size" :value="__('Porte')" />
                <select class="form-select rounded mb-4" name="size" id="size">
                    @foreach ($porte as $p)
                        <option>{{$p}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <x-input-label for="description" :value="__('Descreva seu pet')" />
                <x-text-input id="description" class="block mt-1 w-full mb-4" 
                type="text" name="description" 
                required autofocus autocomplete="description" 
                placeholder="ex.: carinhoso(a), companheiro(a)" />
            </div>
            {{-- <div class="mt-4 mb-4">
                <p class="mt-4 d-block font-medium text-md text-gray-700">Onde o pet está localizado?</p>
                <select class="form-select rounded me-3 mt-1" name="state" id="state">
                    <option selected>Selecione o Estado</option>
                    @foreach ($states as $state)
                        <option value="{{$state->id}}">{{ $state->abbreviation }}</option>
                    @endforeach
                </select>
    
                <select class="form-select rounded" name="city" id="city" disabled>
                    <option selected>Cidade</option>
                </select>
            </div>
            <div class="mb-3">
                <x-input-label for="formFileSm" :value="__('Foto')" />
                <x-text-input id="formFileSm" class="form-control form-control-sm" 
                type="file" 
                placeholder="ex.: carinhoso(a), companheiro(a)" />
            </div> --}}
            <x-primary-button>Cadastrar</x-primary-button>
        </form>
    </section>

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
</x-app-layout>
