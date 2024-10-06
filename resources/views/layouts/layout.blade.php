<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="flex flex-col min-h-screen bg-gray-100">
        {{-- Navigation --}}
        <div class="fixed w-full h-14 top-0 z-10">
            @include('layouts.navigation')
        </div>

        <!-- Content -->
        <main class="w-full flex-grow pt-14">
            @yield('content')
        </main>

        {{-- Footer --}}
        <div class="w-full h-10">
            <x-footer />
        </div>
    </div>

    <!-- Scripts -->
    @stack('script')
</body>

</html>
