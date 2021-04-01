<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', config('app.name'))</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">

<main role="main" class="flex flex-col items-center justify-center">
    @yield('content')
</main>

<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
</ul>

<footer class="text-gray-400">
    &copy; Copyright {{ date('Y') }} @if(! Route::is('about'))&middot; <a href="{{ route ('about') }}" class="text-indigo-500 hover:text-indigo-800 underline">About Us</a>
    @endif
</footer>

    </body>
</html>
