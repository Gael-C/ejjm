<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'École Judo Jujitsu Marsilly' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
        @livewireStyles
    </head>
    <body >
        @livewire('partials.header')
        @if (Route::is('club'))
            <img src="{{ asset('storage/banniere.webp') }}" alt="Image de salut Judo"> 
        @endif
        <main class="dark:bg-gray-900">
            {{ $slot }}
        </main>
        <footer class="dark:bg-gray-900">
            @livewire('partials.footer')
        </footer>
    </body>
</html>
