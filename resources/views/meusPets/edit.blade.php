<x-app-layout>
    <section class="section-create">
        <div class="cabecalho-novoPet">
            <h1 class=" mb-4 mt-20">Edição do pet  <strong>'{{$pets->name}}'</strong></h1>
            <img src="{{ asset('images/Patas.png') }}" alt="imagem patas" class="patas">
        </div>
        <x-form :action="route('meusPets.update', $pets->id)" 
            :name="$pets->name"
            :age="$pets->age"
            :size="$pets->size"
            :description="$pets->description"
            ></x-form>
    </section>
</x-app-layout>