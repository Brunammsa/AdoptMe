<x-app-layout>
    <section class="section-meusPets">
        <div class="cabecalho">
            <h1 class="py-7 align-items-center">Meus Pets</h1>
            <a href="/meusPets/criar" class="link-add-pet">Adicionar novo pet</a>
        </div>
        <div class="pets">
            <ul>
                @if (empty($pets))
                    <p>Você não possue pets cadastrados!</p>
                @else
                    @foreach ($pets as $pet)
                        <li class=" mt-6">{{$pet->name}}</li>
                        <hr>
                    @endforeach
                @endif
            </ul>
        </div>
    </section>
</x-app-layout>
