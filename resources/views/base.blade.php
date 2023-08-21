<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Pegando as variáveis de ambiente --}}
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Laravel - CRUD</h1>
        </header>
        <nav>
            <ul>
                <li><a href="/produtos">Início</a></li>
                <li><a href="/produtos/create">Cadastro de Produtos</a></li>
            </ul>
        </nav>
        <div class="content">
            @yield('content')
        </div>
        <footer>
            <div>
                <p>Os melhores produtos e preços do Brasil.</p>
                <p><a href="http://www.laravel.com.br" target="_blank">Laravel Site</a></p>
            </div>
            <div>
                
            </div>
        </footer>
    </div>
</body>
</html>