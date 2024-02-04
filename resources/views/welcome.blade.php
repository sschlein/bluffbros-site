<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-[#f1daa4]">
    <div class="min-h-screen flex items-center">
        <div class="flex flex-col max-w-3xl mx-auto">
            <div class="flex flex-col space-y-4 items-center justify-center text-center py-8">
                <h1 class="text-center text-3xl md:text-6xl font-bold">BluffBros</h1>
                <div class="text-lg">Poker Timer for iOS</div>
            </div>
            <img src="/images/bluffbros.png" class="flex w-full max-w-xl px-4">
        </div>
    </div>
    </body>
</html>
