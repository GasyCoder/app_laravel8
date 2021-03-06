<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', config('app.name'))</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="icon" type="icon" href="{{ asset('/img/fav.png')}}">
    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">

<main role="main" class="flex flex-col items-center justify-center">
    @yield('content')
</main>

<ul>
     @if(! Route::is('home'))<li><a href="{{ route('home') }}">Home</a></li>@endif
     @if(! Route::is('about'))<li><a href="{{ route('about') }}">About</a></li>@endif
     @if(! Route::is('contact'))<li><a href="{{ route('contact') }}">Contact</a></li>@endif
</ul>

<footer class="text-gray-400">
    &copy; Copyright {{ date('Y') }} &middot; <a href="https://gasycoder.com" target="_blank" class="text-indigo-500 hover:text-indigo-800 underline">https://gasycoder.com</a>
</footer>

    </body>
</html>
