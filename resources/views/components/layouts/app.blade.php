<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <div class="flex">
        <nav class="h-screen w-[200px] border-r flex flex-col space-y-4 text-xl items-center pt-12">
            <a href="/" class="{{ request()->is('/') ? 'font-bold' : '' }}">Todo</a>
            <a href="/counter" class="{{ request()->is('counter') ? 'font-bold' : '' }}">Counter</a>
            <a href="/posts" class="{{ request()->is('posts') ? 'font-bold' : '' }}">Posts</a>
        </nav>
        <main class="flex-1 p-6">
            {{ $slot }}
        </main>
    </div>
</body>
@livewireScripts

</html>
