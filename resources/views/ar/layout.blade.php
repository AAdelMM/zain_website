<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ZainZwy')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/zain.png')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper CSS -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<style type="text/css">
    @font-face {
        font-family: 'HacenTunisia';
        src: url('{{ asset('fonts/HacenTunisia.ttf') }}') format('truetype');
    }
    body{
        font-family:'HacenTunisia', sans-serif;
    }
</style>


    @livewireStyles
    
</head>
<body >
    @include('ar.sections.header')

    <main>
        @yield('content')
    </main>

    @include('ar.sections.footer')

    @livewireScripts
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>