<form action="{{$action}}" class="form-create" method="POST">
    @csrf
    @if($update)
        @method('put')
    @endif
    
    <div>
        <x-input-label for="name" :value="__('Nome')" />
        <input type="text"
        autofocus  
        id="name" 
        name="name" 
        class=" block mt-1 w-full mb-4 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" 
        @isset($name) value="{{ $name }}"@endisset>
    </div>
    <div>
        <x-input-label for="age" :value="__('Idade')" />
        <input type="text"
        autofocus  
        id="age" 
        name="age" 
        class=" block mt-1 w-full mb-4 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" 
        @isset($age) value="{{ $age }}"@endisset>
    </div>
    <div>
        <x-input-label for="size" :value="__('Porte')" />
        <x-input-select class="block mt-1 w-25 mb-4" name="size" id="size" type="select"/>
    </div>
    <div>
        <x-input-label for="description" :value="__('Descreva seu pet')" />
        <input type="text"
        autofocus  
        id="description" 
        name="description" 
        class="block mt-1 w-full mb-4 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" 
        @isset($description) value="{{ $description }}"@endisset>
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
