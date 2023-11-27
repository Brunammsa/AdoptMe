<x-app-layout>
    <p class="phrase-app">Olá! Veja os amigos disponíveis para adoção!</p>
    <ul class="ul-app">
        @foreach ($pets as $pet)
            @php
                $petImage = $files::where('pets_id', $pet->id)->first()
            @endphp
            <li class="container-pet-dashboard">
                <img class="pet-image" src="{{ asset('upload/' . $petImage->name_upload) }}" style="height: 150px; width: 150px">
                <small class="card-title">Nome: <strong>{{$pet->name}}</strong></small>
                <small class="card-text">Idade: {{$pet->age}}</small>
                <small class="card-text">Porte: {{$pet->size}}</small>
                <small class="card-text">{{$pet->description}}</small>
                <small class="text-body-secondary">
                    {{ $pet->cities->name}}/{{ $pet->cities->states->abbreviation}}
                </small>
                <div class="button-responsavel">
                    <button>
                        <img src="{{asset('images/iconeMensagem.png')}}" alt="">
                    <button>
                    <small>Falar com o responsável</small>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>
