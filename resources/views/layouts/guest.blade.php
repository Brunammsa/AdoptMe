<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    </head>
    <body class="body-guest">
        <div class="main-guest">
            <main>
                <img src="public/build/imagens/Logo.png">LOGO
                <section>
                    <article class="frases-guest">
                        <h2 class="h2-guest">Boas Vindas</h2>
                        <p class="p-guest">Adotar pode mudar uma vida. Que tal buscar 
                        seu novo melhor amigo hoje? Vem com a gente!</p>
                    </article>
            
                    <div >
                        {{ $slot }}
                    </div>
                </section>
            </main>
            <footer>
                2023 - Desenvolvido para fins de estudos para uso gratuito - BMMSA
            </footer>
        </div>
    </body>
</html>
