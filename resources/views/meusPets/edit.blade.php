@props([
    'name' => $pets->name,
    'age' => $pets->age,
    'description' => $pets->description,
    'id' => $pets->id,
    'size' => $pets->size,
    'state' => $states,
    'cities' => $cities
])

<x-app-layout>
    <section class="section-create">
        <div class="cabecalho-novoPet">
            <h1>Edição do pet  <strong>'{{$name}}'</strong></h1>
            <img src="{{ asset('images/Patas.png') }}" alt="imagem patas" class="patas">
        </div>
        <x-form :action="route('meusPets.update', $id)" 
            :name="old('name')"
            :age="old('age')"
            :description="old('description')"
            :states="$states"
            :cities="$cities"
            :update="true"
            ></x-form>
    </section>
</x-app-layout>