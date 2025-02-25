<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" href="{{ asset('image/icon/icons8-pinheiro-162.png') }}" type="image/png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Marketplace - Produtos</title>
        <link rel="stylesheet" href="{{ assert('css/produtos.css') }}">
        <!--<script src="./javascript/detalhesProdutos.js"></script>-->
    </head>
<body>
    <header>
        @include('include.header')
    </header>
    <main>
        <selection class="anuncios">
            <div class="centralizar_txt">
                <h2>Nossos Produtos</h2>
            </div>

            <div class="produtos-container"></div>
            
        </selection>
    </main>
    <footer>
        @include('include.footer')
    </footer>
</body>
</html>