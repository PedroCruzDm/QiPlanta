<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Marketplace - A Natureza ao Seu Alcance</title>
        <link rel="stylesheet" href="{{ url('css/header.css') }}">
        <link rel="icon" href="{{ asset('image/icon/icons8-pinheiro-162.png') }}" type="image/png">
        <link rel="stylesheet" href="{{ url('css/menu.css') }}">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <header>
            @include('include.header')
        </header>

        <main>

            <div class="centralizar_txt">
                <center>
                    <h2 style="font-size: 40px;">Bem-vindo à Central da <strong style="color:green">Vida</strong>!</h2>
                    <p style="font-size: 20px; color: #555;">Transforme seu ambiente com o poder das plantas. Aqui, cada espécie tem uma história para contar.</p>

                </center>
            </div>

            <div class="container mt-4 mb-5">
                <div id="carouselProdutos" class="carousel slide" data-bs-ride="carousel" style="max-width: 800px; margin: 0 auto;">

                    <div class="carousel-inner rounded-4 shadow-sm">
                        <div class="carousel-item active" onclick="window.location.href=''">
                        <img src="{{ url('image/banner1.png') }}" class="d-block w-100" alt="Lírio da Paz" style="height: 300px; object-fit: cover; background-color: #f8f9fa;">
                    </div>

                    <div class="carousel-item" onclick="window.location.href='./blog.php';">
                        <img src="{{ url('image/banner2.png') }}" class="d-block w-100" alt="Jibóia" style="height: 300px; object-fit: cover; background-color: #f8f9fa;">
                    </div>

                    <div class="carousel-item" onclick="window.location.href='./produtos.php?categoria=ferramentas';">
                        <img src="{{ url('image/banner3.png') }}" class="d-block w-100" alt="Espada de São Jorge" style="height: 300px; object-fit: cover; background-color: #f8f9fa;">
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselProdutos" data-bs-slide="prev" style="width: 40px; background: rgba(0,0,0,0.1); border-radius: 0 8px 8px 0;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselProdutos" data-bs-slide="next" style="width: 40px; background: rgba(0,0,0,0.1); border-radius: 8px 0 0 8px;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>

            </div>
        </div>

        <selection class="anuncios">

        </selection>

        </main>

        <footer>
            @include('include.footer')
        </footer>
    </body>
</html>
