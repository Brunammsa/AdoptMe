<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset("footprint-96.png")}}">
        <link href="{{ asset('css/styleApp.css') }}" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navigation')

        <!-- Page Content -->
        <main class="main-app">
            {{ $slot }}
        </main>
        <footer>
            <p class="p-footer">2023 - Desenvolvido através do Challenger Alura por <a href="https://github.com/Brunammsa" target='_blank' rel="external">BMMSA</a> para fins gratuitos</p>
        </footer>
    </body>
</html>
