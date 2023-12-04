<x-app-layout>
    <div class="container-album">
        <img class="pet-image-show" src="{{ asset('upload/' . $petImage->name_upload) }}">
    </div>
    <div class="container-show">
        <div class="ficha-pet">
            <h1 class="h1-ficha">FICHA DO PET:<h1>
        </div>
        <div class="content-pet">
            <p>{{$pet->name}}</p>
            <p>{{$pet->age}}</p>
            <p>Porte {{$pet->size}}</p>
            <p>{{$pet->description}}</p>
        </div>
        <div class="back">
            <x-nav-link href="{{route('meusPets.index')}}">Voltar</x-nav-link>
        </div>
    </div>
</x-app-layout>