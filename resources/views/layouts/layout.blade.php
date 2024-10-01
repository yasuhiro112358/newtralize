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
    {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900"> --}}
    {{-- <div class="min-h-screen bg-gray-100"> --}}
    <div class="flex flex-col min-h-screen bg-gray-100">
        {{-- Navigation --}}
        @include('layouts.navigation')

        <!-- Content -->
        <main class="flex-grow pt-16">
            @yield('content')
        </main>

        {{-- Footer --}}
        <x-footer />
    </div>
</body>

</html>
