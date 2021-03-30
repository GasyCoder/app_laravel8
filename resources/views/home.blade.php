<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hello Madagascar</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
<h1>Hello Malagasy</h1>
<p>Heur local {{ date('h:i:s A') }}.</p>

<footer>
    &copy; Copyright {{ date('Y') }} &middot; <a href="/about-us">About Us</a>
</footer>
    </body>
</html>
