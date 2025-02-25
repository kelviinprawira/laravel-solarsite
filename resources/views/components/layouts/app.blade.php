<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="bumblebee">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-base-200 min-h-screen">
@auth()
    <div class="drawer lg:drawer-open">
        <input id="drawer" type="checkbox" class="drawer-toggle"/>
        <div class="drawer-content">
            <livewire:partial.navbar/>
            {{$slot}}
        </div>
        <div class="drawer-side">
            <label for="drawer" aria-label="close sidebar" class="drawer-overlay"></label>
            <livewire:partial.sidebar/>
        </div>
    </div>
@endauth
@guest()
    <div class="flex flex-col items-center justify-center h-screen bg-no-repeat bg-center bg-cover"
         style="background-image: url({{asset('images/login_image.png')}})">
        <h1 class="py-3 text-5xl font-extrabold text-white">DASHBOARD SOLAR SITE</h1>
        {{ $slot }}
    </div>
@endguest
<footer class="footer footer-center bg-white flex justify-center text-base-content p-4">
    <aside>
        <p>Copyright © {{\Carbon\Carbon::now()->format('Y')}} - All right reserved by Rusman - Astra Agrolestari -
            SAL1</p>
    </aside>
</footer>
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('chart/dist/apexcharts.min.js')}}"></script>
<x-livewire-alert::scripts/>
</body>
</html>

