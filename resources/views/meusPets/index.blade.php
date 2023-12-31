<x-app-layout>
    <section class="section-meusPets">
        <div class="cabecalho">
            <h1 class="py-7 align-items-center">Meus Pets</h1>
            <a href="/meusPets/criar" class="link-add-pet">Adicionar novo pet</a>
        </div>
        <div class="pets">
            <ul>
                @if ($pets->count() === 0)
                    <p>Você não possui pets cadastrados!</p>
                @else
                    @foreach ($pets as $pet)
                        <li class="container-pets">
                            <a class="link-pet" href="{{route('meusPets.show', $pet->id)}}">{{$pet->name}}</a>
                            <div class="icones-att-del">
                                <a href="{{route('meusPets.edit', $pet->id)}}">
                                    <img src="{{asset('images/edit.png')}}" alt="editar pet">
                                </a>

                                <form action="{{route('meusPets.destroy', $pet->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button>
                                        <img src="{{asset('images/delete.png')}}" alt="deletar pet">
                                    </button>
                                </form>
                            </div>
                        </li>
                        <hr>
                    @endforeach
                @endif
            </ul>
        </div>
    </section>
    <div class="paginate">
        {{ $pets->onEachSide(2)->links() }}
    </div>
</x-app-layout>

