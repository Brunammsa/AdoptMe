<x-app-layout>
    <section class="section-create">
        <div class="cabecalho-novoPet">
            <h1 class="cabecalho-add-edit">Edição do pet  <strong>'{{$pets->name}}'</strong></h1>
            <img src="{{ asset('images/Patas.png') }}" alt="imagem patas" class="patas">
        </div>
        <x-form :action="route('meusPets.update', $pets->id)" 
            :name="$pets->name"
            :age="$pets->age"
            :description="$pets->description"
            :update="true"
            ></x-form>
    </section>
</x-app-layout>