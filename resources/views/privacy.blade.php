<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BluffBros – Poker Timer for iOS</title>
        <meta name="description" content="A minimalist Poker Timer for iOS">
        <meta property="og:title" content="BluffBros">
        <meta property="og:description" content="A minimalist Poker Timer for iOS">
        <meta property="og:site_name" content="BluffBros">
        <meta property="og:image" content="{{ config('app.url') }}/images/card.png">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image" content="{{ config('app.url') }}/images/card.png">
        <meta name="twitter:title" content="BluffBros">
        <meta name="twitter:description" content="A minimalist Poker Timer for iOS">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-[#f1daa4]">
    <div class="p-4">
        <a href="/" class="underline">back</a>
        <div class="flex flex-col max-w-3xl mx-auto ">
            The app doesn't track any data nor does it send any data to anyone. It's just a blind timer for playing poker.
        </div>
    </div>
    </body>
</html>
