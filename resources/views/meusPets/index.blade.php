<x-app-layout>
    <section class="section-meusPets">
        <div class="cabecalho">
            <h1 class="mb-7 align-items-center">Meus Pets</h1>
            <a href="/meusPets/criar" class="link-add-pet">Adicionar novo pet</a>
        </div>
        <div class="pets">
            <ul>
                @foreach ($pets as $pet)
                    <li class=" mt-4">{{$pet}}</li>
                    <hr>
                @endforeach
            </ul>
        </div>
    </section>
</x-app-layout>
