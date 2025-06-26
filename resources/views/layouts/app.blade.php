<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'TaskFlow') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome -->
   <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">

</head>

<body class="bg-gray-100 text-gray-800">

    {{-- Sidebar (Tetap di kiri) --}}
  

    {{-- Main Content di samping sidebar --}}
    <div class="ml-64 ">

        {{-- Navbar --}}
        @include('layouts.partials.navbar')

        {{-- Konten --}}
        <main class="flex-1 p-6">
            {{ $slot }}
        </main>

        {{-- Footer --}}
        @include('layouts.partials.footer')
    </div>

</body>

</html>
