<!DOCTYPE html>
<html>
    <head>
        <title> @yield('title', 'Titulo por defecto') </title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        @include('partials.nav')
        @yield('content')
    </body>
</html>