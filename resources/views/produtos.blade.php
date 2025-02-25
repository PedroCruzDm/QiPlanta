<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

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