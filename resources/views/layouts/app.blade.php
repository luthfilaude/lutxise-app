<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Portfolio')</title>
    <link rel="stylesheet" href="@vite('resources/css/app.css')">
</head>
<body>
    @include('components.navbar')
    <main>
    @yield('content')
    </main>
    @include('components.footer')
    <script src="@vite('resources/js/app.js')"></script>
</body>
</html>