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
    <body class="body-guest">
        <header>
            <img src="{{ asset('images/header-bg.svg') }}" alt="imagem esquerda" class="header-guest-left">
        </header>
        <div class="main-guest">
            <picture>
                <img src="{{ asset('images/body-bg.svg') }}" alt="imagem direita" class="copy-image-right">
            </picture>
            <main>                
                <section class="section-guest">
                    <picture>
                        <img src="{{ asset('images/logo.png') }}" class="logo">
                    </picture>
                    <article class="article-guest">
                        <h2 class="welcome-guest">Boas-vindas!</h2>
                        <p class="phrase-guest">Adotar pode mudar uma vida. Que tal buscar
                        seu<br> novo melhor amigo hoje? Vem com a gente!</p>
                        <div class="login">
                            {{ $slot }}
                        </div>
                    </article>
                    <picture>
                        <img src="{{ asset('images/pets.svg') }}" alt="imagem pets footer" class="footer-pets">
                    </picture>
                </section>
            </main>
            <picture>
                <img src="{{ asset('images/body-bg.svg') }}" alt="imagem direita" class="header-guest-right">
            </picture>
        </div>
        <footer>
            <p class="p-footer">2023 - Desenvolvido através do Challenger Alura por <a href="https://github.com/Brunammsa" target='_blank' rel="external">BMMSA</a> para fins gratuitos</p>
        </footer>
    </body>
</html>
