<x-app-layout>
    <section class="section-meusPets">
        <div class="cabecalho">
            <h1 class="py-7 align-items-center">Meus Pets</h1>
            <a href="/meusPets/criar" class="link-add-pet">Adicionar novo pet</a>
        </div>
        <div class="pets">
            <ul>
                @if (empty($pets))
                    <p>Você não possui pets cadastrados!</p>
                @else
                    @foreach ($pets as $pet)
                        <li class="container-pets">
                            {{$pet->name}}
                            <div class="icones-att-del">
                                <img src="{{asset('images/edit.png')}}" alt="">
                                <img src="{{asset('images/delete.png')}}" alt="">
                            </div>
                        </li>
                        <hr>
                    @endforeach
                @endif
            </ul>
        </div>
    </section>
</x-app-layout>
