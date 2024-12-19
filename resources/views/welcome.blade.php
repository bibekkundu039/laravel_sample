<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bibek code lab</title>
        @vite(['resources/css/app.css'])
        
    </head>
    <body class="bg-gray-900 text-white">
        <div class="flex flex-col items-center justify-right">
            <a href="/">Home</a>
            <a href="/about">About Us</a>
            <a href="/teas">Teas</a>
        </div>
        <div class="flex flex-col items-center justify-center min-h-screen">
            <h1 class="text-3xl bg-blue-500 p-4 rounded-xl">Hello Bibek code lab</h1>
        </div>
    </body>
</html>
