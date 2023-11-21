<form action="{{$action}}" class="form-create" method="POST">
    @csrf
    @if($update)
        @method('put')
    @endif
    
    <div>
        <x-input-label for="name" :value="__('Nome')" />
        <x-text-input id="name" class="block mt-1 w-full mb-4" 
        name="name" 
        required autofocus autocomplete="name"/>
        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
    </div>
    <div>
        <x-input-label for="age" :value="__('Idade')" />
        <x-text-input id="age" class="block mt-1 w-full mb-4" 
        name="age" 
        required autofocus autocomplete="age"/>
    </div>
    <div>
        <x-input-label for="size" :value="__('Porte')" />
        <x-input-select class="block mt-1 w-25 mb-4" name="size" id="size" type="select"/>
    </div>
    <div>
        <x-input-label for="description" :value="__('Descreva seu pet')" />
        <x-text-input id="description" class="block mt-1 w-full mb-4" 
        name="description" 
        required autofocus autocomplete="description"/>
    </div>
    
    <div>
        <x-input-label for="locale" :value="__('Onde está o pet?')" />
        <x-select-cities class="block mt-1 w-30 mb-4"/>
    </div>
    {{-- <div class="mb-3">
        <x-input-label for="formFileSm" :value="__('Foto')" />
        <x-text-input id="formFileSm" class="form-control form-control-sm" 
        type="file" 
        placeholder="ex.: carinhoso(a), companheiro(a)" />
    </div> --}}
    <div class="botoes-create">
        <x-primary-button>Salvar</x-primary-button>
        <x-nav-link href="{{route('meusPets.index')}}">Voltar</x-nav-link>
    </div>
</form>
