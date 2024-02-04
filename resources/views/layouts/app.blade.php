<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your App Name')</title>
    {{-- Ваши стили --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    {{-- Ваши скрипты --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Your App Name</a>
        {{-- Добавьте здесь другие элементы навигации, если нужно --}}
    </nav>

    <div class="container mt-4">
        {{-- Отображение контента из различных представлений --}}
        @yield('content')
    </div>

    {{-- Другие общие элементы вашего макета --}}

    {{-- Ваши скрипты --}}
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
