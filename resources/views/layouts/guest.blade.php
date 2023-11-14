<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset("footprint-96.png")}}">
        <link href="{{ asset('css/styleGuest.css') }}" rel="stylesheet">
    
    </head>
    <body>
        <header>
            <img src="{{asset('images/header-bg.svg')}}" alt="imagem esquerda" class="image-header">
        </header>
        <img src="{{asset('images/body-bg.svg')}}" alt="imagem direita" class="imagem-body-direita">
        <main>
            <picture>
                <img src="{{asset('images/Logo.png')}}" alt="logo" class="logo">
            </picture>
            <article class="article-guest">
                <h2>Boas-vindas!</h2>
                <p id="phrase-guest" class="phrase-guest"></p>
            </article>
            <div>
                {{ $slot }}
            </div>
        </main>
        <div class="pets-guest">
            <img src="{{asset('images/pets.svg')}}" alt="pets guest" class="image-pets-footer">
        </div>
        <footer>
            <p>
                2023 - Desenvolvido através do Challenger Alura por 
                <a href="https://github.com/Brunammsa" target='_blank' rel="external">BMMSA</a> - sem fins lucrativos.
            </p>
        </footer>
    </body>
    <script>
        function ajusteDeConteudo(){
            let tagP = document.getElementById("phrase-guest");
            if (window.innerWidth <= 500){
                tagP.innerHTML = "Que tal mudar sua vida\n adotando seu novo melhor\n amigo? Vem com a gente!";
            } else {
                tagP.innerHTML = "Adotar pode mudar uma vida.\nQue tal buscar seu novo melhor amigo hoje?\nVem com a gente!";
            }
        }
        window.onload = ajusteDeConteudo;
        window.onresize = ajusteDeConteudo;
    </script>
</html>
