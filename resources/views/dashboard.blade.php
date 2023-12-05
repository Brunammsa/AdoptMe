<x-app-layout>
    <p class="phrase-app">Olá! Veja os amigos disponíveis para adoção!</p>
    <ul class="ul-app">
        @foreach ($pets as $pet)
            @php
                $petImage = $files::where('pets_id', $pet->id)->first()
            @endphp
            <li class="container-pet-dashboard">
                <div class="pet-image">
                    <img class="img-pets" src="{{ asset('upload/' . $petImage->name_upload) }}">
                </div>
                <div class="card-text">
                    <a href="{{route('meusPets.show', $pet->id)}}" class="card-name"><strong>{{$pet->name}}</strong></a>
                    <small>{{$pet->age}}</small>
                    <small>Porte {{$pet->size}}</small>
                    <small>{{$pet->description}}</small>
                    <p class="text-body-secondary">
                        {{ $pet->cities->name}} ({{ $pet->cities->states->abbreviation}})
                    </p>
                    <div class="button-responsavel">
                            <a href="{{route('meusPets.contact')}}">
                                <img src="{{asset('images/iconeMensagem.png')}}" alt="">
                            </a>
                            <p class="msg-dashboard">Falar com o responsável</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="paginate">
            {{ $pets->onEachSide(3)->links() }}
        </div>

</x-app-layout>
