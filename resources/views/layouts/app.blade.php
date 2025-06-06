<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body data-theme="light" class="bg-white text-gray-900">
    @include('components.navbar')
    <main class="pt-16">
        @yield('content')
    </main>
    @include('components.footer')
    @vite('resources/js/app.js')
    @yield('scripts')
</body>

</html>
