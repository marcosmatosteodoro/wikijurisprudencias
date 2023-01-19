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
        @component('components.site.header')
        @endcomponent
    </header>

    <main>
        @yield('content')
    </main>

    <aside>
        
        @component('components.site.modal-cadastrar')
        @endcomponent

        @component('components.site.modal-entrar')
        @endcomponent

    </aside>
    <footer>

    </footer>
</body>
</html>