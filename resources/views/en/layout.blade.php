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
    @livewireStyles
    
</head>
<body >
    @include('en.sections.header')

    <main>
        @yield('content')
    </main>

    @include('en.sections.footer')

    @livewireScripts

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>