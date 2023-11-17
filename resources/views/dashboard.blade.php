<x-app-layout>
    <section class="section-app">
            <p class="phrase-app">Olá! Veja os amigos disponíveis para adoção!</p>
            <div>
                <div class="pets">
                    <ul>
                        @foreach ($pets as $pet)
                            <li>{{ $pet }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
    </section>

</x-app-layout>
