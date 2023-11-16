<x-app-layout>
    
    <section class="section-create">
        <div class="cabecalho-novoPet">
            <h1 class=" mb-4 mt-20">Digite abaixo as informações do seu pet:</h1>
            <img src="{{ asset('images/Patas.png') }}" alt="imagem patas" class="patas">
        </div>
        <form action="" class="form-create" method="POST">
            @csrf
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full mb-4" 
                type="text" 
                name="name" 
                required autofocus autocomplete="name"
                placeholder="ex.: floquinho" />
            </div>

            {{-- <div>
                <x-input-label for="raca" :value="__('Raça')" />
                <x-text-input id="raca" class="block mt-1 w-full mb-4" 
                type="text" 
                name="raca" 
                required autofocus autocomplete="raca"
                placeholder="ex.: gato/cachorro" />
            </div> --}}

            <div>
                <x-input-label for="idade" :value="__('Idade')" />
                <x-text-input id="idade" class="block mt-1 w-full mb-4" 
                type="text" 
                name="idade" 
                required autofocus autocomplete="idade"
                placeholder="ex.: 5 meses/anos" />
            </div>

            <div>
                <x-input-label for="porte" :value="__('Porte')" />
                <x-text-input id="porte" class="block mt-1 w-full mb-4" 
                type="text" 
                name="porte" 
                required autofocus autocomplete="porte"
                placeholder="ex.: grande/médio/pequeno" />
            </div>
            <div>
                <x-input-label for="descricao" :value="__('Descreva seu pet')" />
                <x-text-input id="descricao" class="block mt-1 w-full mb-4" 
                type="text" name="descricao" 
                required autofocus autocomplete="descricao" 
                placeholder="ex.: carinhoso(a), companheiro(a)" />
            </div>
            <div class="mb-3">
                <x-input-label for="formFileSm" :value="__('Foto')" />
                <x-text-input id="formFileSm" class="form-control form-control-sm" 
                type="file" 
                placeholder="ex.: carinhoso(a), companheiro(a)" />
            </div>
        </form>
    </section>
</x-app-layout>
