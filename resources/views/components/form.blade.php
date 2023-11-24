@props(['states', 'action', 'name', 'age', 'description', 'update'])

<form action="{{$action}}" class="form-create" method="POST" enctype="multipart/form-data">
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
        class="block mt-1 w-60 mb-3 border-gray-300 text-sm focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" 
        @isset($name) value="{{ $name }}"@endisset
        @empty($name)
            placeholder="Floquinho"
        @endempty>
    </div>
    <div>
        <x-input-label for="age" :value="__('Idade')" />
        <input type="text"
        autofocus  
        id="age" 
        name="age" 
        class=" block mt-1 w-60 mb-3 border-gray-300 text-sm focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" 
        @isset($age) value="{{ $age }}"@endisset
        @empty($age)
            placeholder="2 meses/anos"
        @endempty>
    </div>
    <div>
        <x-input-label for="description" :value="__('Descreva seu pet')" />
        <input type="text"
        autofocus  
        id="description" 
        name="description" 
        class="block mt-1 w-60 mb-3 border-gray-300 text-sm focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" 
        @isset($description) value="{{ $description }}"@endisset
        @empty($description)
             placeholder="Carinhoso e brincalhão"
        @endempty>
    </div>
    
    <div>
        <x-input-label for="locale" :value="__('Onde está o pet?')" />
        <x-select-cities class="block mt-1 w-30 mb-3" name="state" :states="$states"/>
    </div>
    <div>
        <x-input-label for="size" :value="__('Porte')" />
        <x-input-select class="block mt-1 w-25 mb-3" name="size" id="size" type="select"/>
    </div>
    <div>
        <x-input-label for="formFileSm" :value="__('Foto')" />
        <input class="form-control form-control-sm mt-1"
        id="formFileSm"
        type="file"
        name="image"
        required
        >
    </div>
    <div class="botoes-create">
        <x-primary-button value="updload">Salvar</x-primary-button>
        <x-nav-link href="{{route('meusPets.index')}}">Voltar</x-nav-link>
    </div>
</form>
