<x-app-layout>
    <section class="section-app">
        <p class="phrase-app">Olá! Veja os amigos disponíveis para adoção!</p>
        <div class="pets">
            <ul>
                @foreach ($pets as $pet)
                    @foreach ($files as $file)
                        <li>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <tr>
                                            <td><img src="{{ asset('upload/' . $file->name_upload) }}" style="height: 100px; width: 100px"></td>
                                        </tr>
                                        </tbody>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <img src="" alt="">
                                            <h5 class="card-title">{{$pet->name}}</h5>
                                            <p class="card-text">{{$pet->age}}</p>
                                            <p class="card-text">{{$pet->size}}</p>
                                            <p class="card-text">{{$pet->description}}</p>
                                            <small class="text-body-secondary">
                                                {{ $pet->cities->name ?? 'Cidade não encontrada' }} /
                                                {{ $pet->cities->states->abbreviation}}
                                            </small>
                                        </div>
                                        <div>
                                            <button><img src="{{asset('images/iconeMensagem.png')}}" alt=""><button>
                                            <span> Falar com o responsável</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @endforeach
            </ul>
        </div>
    </section>
</x-app-layout>
