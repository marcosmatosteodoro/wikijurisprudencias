<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    @vite('resources/css/bootstrap/bootstrap.css')

    @vite('resources/js/app.js')
    @vite('resources/js/bootstrap/bootstrap.js')

    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
    <header>

    </header>

    <main>
        @yield('content')
    </main>

    <footer>

    </footer>
</body>
</html>