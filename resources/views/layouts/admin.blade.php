<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

       

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap5.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

        @livewireStyles

        
    </head>
    <body class="font-sans antialiased">

        @stack('modals')

        @livewireScripts
        <!-- Scripts -->
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
