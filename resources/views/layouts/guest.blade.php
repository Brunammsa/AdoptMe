<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    </head>
    <body class="body-guest">
        <header>
            <img src="public/build/images/header-bg.svg" alt="" class="img-header-esquerdo">
        </header>
        <div class="main-guest">
            <main>
                <section>
                    <article class="frases-guest">
                        <img src="public/build/imagens/Logo.png" class="logo">
                        <h2 class="h2-guest">Boas Vindas</h2>
                        <p class="p-guest">Adotar pode mudar uma vida. Que tal buscar<br>
                        seu novo melhor amigo hoje? Vem com a gente!</p>
                    </article>
            
                    <div >
                        {{ $slot }}
                    </div>
                </section>
            </main>
            <footer>
                <p>2023 - Desenvolvido por <a href="https://github.com/Brunammsa" target='_blank' rel="noreferrer">BMMSA</a></p>
            </footer>
        </div>
    </body>
</html>
