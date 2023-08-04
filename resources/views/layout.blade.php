<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        <!-- Styles -->
    </head>
    <body class="antialiased">
        <div class="h-10 flex row items-center py-2 bg-neutral-200 border-b-2 border-b-blue-800">
            <img class="h-full ml-3" src="./pictures/server.png" /> <h1 class="ml-5 text-xl text-blue-900 text-bold"> Server Manager</h1>
        </div>
        @yield('content')
    </body>
</html>
