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
            <img src="{{asset('images/header-bg.svg')}}" alt="imagem esquerda" class="header-image">
        </header>
        <img src="{{asset('images/body-bg.svg')}}" alt="imagem direita" class="imagem-body-direita">

        <main class="main-guest">
            <section class="section-guest">
                <picture>
                    <img src="{{asset('images/Logo.png')}}" alt="logo" class="logo">
                </picture>
                <article>
                    <h2>Boas-vindas!</h2>
                    <p class="phrase-guest">Adotar pode mudar uma vida. Que tal buscar
                        seu<br> novo melhor amigo hoje? Vem com a gente!</p>
                </article>
                <div class="login">
                    {{ $slot }}
                </div>
            </section>
            
        </main>
    </body>
</html>
