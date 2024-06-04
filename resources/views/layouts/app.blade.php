<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>


    <main>
        @yield('content')
    </main>



    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>