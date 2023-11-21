<x-app-layout>
    <section class="section-create">
        <div class="cabecalho-novoPet">
            <h1>Cadastro do pet:</h1>
            <img src="{{ asset('images/Patas.png') }}" alt="imagem patas" class="patas">
        </div>
        <x-form :action="route('meusPets.store')" :update="false"></x-form>
    </section>
</x-app-layout>

