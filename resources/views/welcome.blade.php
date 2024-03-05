<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alpine com Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div x-data="counter">
            <span x-text="count"></span>
            <button @click="increment">Increment</button>
            <button @click="decrement">Decrement</button>
        </div>
    </body>
</html>
