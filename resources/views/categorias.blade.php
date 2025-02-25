<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias - Marketplace</title>
    <link rel="icon" href="./images/icons8-pinheiro-162.png" type="image/png">
    <link rel="stylesheet" href="{{ url('css/categorias.css') }}">
</head>
<body>
    <header>
        @include('include.header')
    </header>
    <main>
        <section class="categorias">
            <h2 class="titulo">Explore Nossas Categorias</h2>
            <div class="grid-categorias">
                <div class="categoria">
                    <img src="{{url('image/plantas.png')}}" alt="Plantas" class="categoria-img">
                    <h3>Plantas</h3>
                    <p>Variedade de plantas para alegrar seu espaço.</p>
                    <a href="{{url('produtos?categoria=plantas')  }}" class="btn">Ver Produtos</a>
                </div>

                <div class="categoria">
                    <img src="{{ url('image/flores.png') }}" alt="Flores" class="categoria-img">
                    <h3>Flores</h3>
                    <p>Flores lindas para todas as ocasiões.</p>
                    <a href="{{url('produtos?categoria=flores')  }}" class="btn">Ver Produtos</a>
                </div>

                <div class="categoria">
                    <img src="{{ url('image/ferramentas.png') }}" alt="Ferramentas" class="categoria-img">
                    <h3>Ferramentas</h3>
                    <p>Equipamentos essenciais para cuidar do seu jardim.</p>
                    <a href="{{ url('produtos?categoria=ferramentas') }}" class="btn">Ver Produtos</a>
                </div>

                <div class="categoria">
                    <img src="{{ url('image/vasos.png') }}" alt="Vasos" class="categoria-img">
                    <h3>Vasos</h3>
                    <p>Estilosos e funcionais para suas plantas.</p>
                    <a href="{{ url('produtos?categoria=vasos') }}" class="btn">Ver Produtos</a>
                </div>

                <!-- Adicione mais categorias conforme necessário -->
            </div>
        </section>
    </main>
    <footer>
        @include('include.footer')
    </footer>
</body>