<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav class="h-16 w-full border-b">
            <a href="/">Todo</a> |
            <a href="/counter">Counter</a>
        </nav>
        {{ $slot }}
    </body>
</html>
