<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- nama web sesuai konfigurasi --}}
        <title>{{ config('app.name', 'Laravel') }}</title> 

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;
        600;700&display=swap">

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ assest('js/app.js') }}" defer></script>
        {{-- karena terjadi masalah pd instalasi tailwind, shg msh menggunakan CDN--}}
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="sytlesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            {{-- membuat komponen navigation utk home --}}
            @include('layouts.navigationhome')

            <!-- Page Content -->
            <main>
                {{-- menyesuaikan konten dlm satu komponen --}}
                {{ $slot }} 
            </main>
        </div>
    </body>
</html>