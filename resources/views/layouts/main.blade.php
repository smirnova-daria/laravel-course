<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title')Страница | @show</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class="bg-slate-400 p-6">
    @yield('menu')
</header>
<main class="container mx-auto px-4">
    @yield('content')
</main>
</body>
</html>
