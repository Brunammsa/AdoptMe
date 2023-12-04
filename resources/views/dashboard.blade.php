<x-app-layout>
    <div>
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
                        <p class="card-name"><strong>{{$pet->name}}</strong></p>
                        <small>{{$pet->age}}</small>
                        <small>Porte {{$pet->size}}</small>
                        <small>{{$pet->description}}</small>
                        <small class="text-body-secondary">
                            {{ $pet->cities->name}} ({{ $pet->cities->states->abbreviation}})
                        </small>
                        <div class="button-responsavel">
                            <a href="#">
                                <img src="{{asset('images/iconeMensagem.png')}}" alt="">
                            </a>
                            <small class="msg-dashboard">Falar com o responsável</small>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
