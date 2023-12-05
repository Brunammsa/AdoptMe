<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset("footprint-96.png")}}">
        <link href="{{ asset('css/styleGuest.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    
    </head>
    <body>
        <div class="container">
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
                    <div>
                        <p id="phrase-guest-long" class="phrase-guest-long">Adotar pode mudar uma vida. Que tal buscar seu novo melhor amigo hoje? Vem com a gente!</p>
                        <p id="phrase-guest-short" class="phrase-guest">Que tal mudar sua vida adotando seu novo melhor amigo? Vem com a gente!</p>
                    </div>
                </article>
                <div>
                    {{ $slot }}
                </div>
            </main>
            <picture class="pets-guest">
                <img src="{{asset('images/pets.svg')}}" alt="pets guest" class="image-pets-footer">
            </picture>
            <footer>
                <p class="p-footer">2023 - Desenvolvido através do Challenger Alura por <a href="https://github.com/Brunammsa" target='_blank' rel="external" class=" font-bold">BMMSA</a> para fins gratuitos</p>
            </footer>
        </div>
        
    </body>
</html>
