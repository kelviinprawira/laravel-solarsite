<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="bumblebee">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-base-200 min-h-screen">
@auth()
    <div class="drawer lg:drawer-open">
        <input id="drawer" type="checkbox" class="drawer-toggle"/>
        <div class="drawer-content">
            @livewire('partial.navbar')
            {{$slot}}
        </div>
        <div class="drawer-side">
            <label for="drawer" aria-label="close sidebar" class="drawer-overlay"></label>
            @livewire('partial.sidebar')
        </div>
    </div>
@endauth
@guest()
    <div class="flex flex-col justify-center items-center h-screen">
        <h1 class="font-bold text-4xl py-3">{{config ('app.name')}}</h1>
        {{ $slot }}
    </div>
@endguest
</body>
</html>
