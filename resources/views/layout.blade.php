<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>Laradex - @yield('title')</title>
</head>
<body>

    <nav>
        <ul>
            <li> <a href="{{ Route('home') }}">Home </a> </li>
            <li> <a href="{{ Route('about') }}">About </a> </li>
            <li> <a href="{{ Route('portafolio') }}">Portafolio </a> </li>
            <li> <a href="{{ Route('contact') }}">Contact </a> </li>
        </ul>
    </nav>

    @yield('content')

</body>
</html>
