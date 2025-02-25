<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carrinho</title>
    <link rel="stylesheet" href="{{ url('css/carrinho.css') }}">
    <link rel="icon" href="{{ asset('image/icon/icons8-pinheiro-162.png') }}" type="image/png">
</head>
<body>
    <header>
        @include('include.header')
    </header>
    <main>
    <div class="div-carrinho-compras">
            <div class="centralizar_txt">
                <h1>Meu carrinho de compras!</h1>
            </div>

            </div>
        </div>
    </main>
    <footer>
        @include('include.footer')
    </footer>
</body>