<x-app-layout>
    <section class="section-create">
        <div class="cabecalho-novoPet">
            <h1 class=" mb-4 mt-20">Edição do pet '{{$pets->name}}':</h1>
            <img src="{{ asset('images/Patas.png') }}" alt="imagem patas" class="patas">
        </div>
        <x-form :action="route('meusPets.store')" :nome="$pets->name"></x-form>
    </section>
</x-app-layout>