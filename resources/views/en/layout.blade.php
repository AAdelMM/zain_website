<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ZainZwy')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
    
</head>
<body class="bg-gray-400">
    @include('en.sections.header')

    <main>
        @yield('content')
    </main>

    @include('en.sections.footer')

    @livewireScripts

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>