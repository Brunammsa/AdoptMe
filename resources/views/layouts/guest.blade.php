<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset("footprint-96.png")}}">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    </head>
    <body class="body-guest">
        <header>
            <img src="{{ asset('images/header-bg.svg') }}" alt="" class="header-guest-left">
        </header>
        <div>
            <main class="main-guest">
                <section>
                    <figure class="logo">
                        <img src="{{ asset('images/logo.png') }}">
                    </figure>
                    <article class="welcome-guest">
                        <h2>Boas Vindas</h2>
                        <p class="p-adoptme">Adotar pode mudar uma vida. Que tal buscar<br>
                        seu novo melhor amigo hoje? Vem com a gente!</p>
                        <div >
                            {{ $slot }}
                        </div>
                    </article>
                </section>
                <figure>
                    <img src="{{ asset('images/body-bg.svg') }}" alt="" class="header-guest-right">
                </figure>
            </main>
            <figure>
                <img src="{{ asset('images/pets.svg') }}" alt="" class="footer-pets">
            </figure>
            <footer>
                <p>2023 - Desenvolvido por <a href="https://github.com/Brunammsa" target='_blank' rel="noreferrer">BMMSA</a></p>
            </footer>
        </div>
    </body>
</html>
