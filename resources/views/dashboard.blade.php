<x-app-layout>
    <section class="section-app">
        <p class="phrase-app">Olá! Veja os amigos disponíveis para adoção!</p>
        <div class="pets">
            <ul>
                @foreach ($pets as $pet)
                    <li>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="..." class="img-fluid rounded-start" alt="foto pet">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$pet->name}}</h5>
                                        <p class="card-text">{{$pet->age}}</p>
                                        <p class="card-text">{{$pet->size}}</p>
                                        <p class="card-text">{{$pet->description}}</p>
                                        <p class="card-text">
                                            {{-- <small class="text-body-secondary">{{$pet->cities->name}}/{{$pet->cities->states->abbreviation}}</small> --}}
                                        </p>
                                        <a> 
                                            <small><img src="{{asset('images/iconeMensagem.png')}}" alt=""> Falar com o responsável<small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        {{ $pets->links() }}
    </section>
</x-app-layout>
