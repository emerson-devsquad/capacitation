<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Styles -->
    @livewireStyles
    
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body class="font-sans antialiased">

    <div class="min-h-screen bg-gray-100">
        <x-site.site-navigation />
        <!-- Page Heading -->
        <header>
            {{ $header ?? '' }}
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <x-footer />

    <livewire:app.alert />

    @livewireScripts
</body>

</html>
