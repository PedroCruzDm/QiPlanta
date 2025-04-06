<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" href="{{ asset('image/icon/icons8-pinheiro-162.png') }}" type="image/png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Marketplace - Produtos</title>
        <link rel="stylesheet" href="{{ url('css/produtos.css') }}">
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

            <div class="produtos-container">

            @foreach ($produtos as $produtos)
                <div class="produto">
                    <center>
                        <img src="{{ asset('storage/' . $produtos->imagem) }}" alt="{{ $produtos->nome }}" class="imagem-produto">
                        <h3>{{ $produtos->nome }}</h3>
                        <p>{{ $produtos->descricao }}</p>
                        <p>R$ {{ number_format($produtos->preco, 2, ',', '.') }}</p>

                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                            </svg>Ver Detalhes
                        </button>
                    </center>
                </div>
            @endforeach
            
                <div class="produto">
                    <center>
                        <img src="{{ url('image/liriodapaz.png') }}">
                        <h3>Lírio-da-paz</h3>
                        <p>Rega moderada, preferencialmente quando o solo estiver seco. Manter em locais com sombra ou luz indireta.</p>

                        <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg>
                                Ver Detalhes
                            </button>
                    </center>
                </div>

                <div class="produto">
                    <img src="{{ url('image/jiboia.png') }}" alt="">
                    <h3>Jibóia</h3>
                    <p>Uma trepadeira resistente que se adapta bem a vários tipos de iluminação. Não exige muitos cuidados e é excelente para purificação do ar.</p>

                    <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg>
                                Ver Detalhes
                            </button>
                </div>

                <div class="produto">
                    <img src="{{ url('image/espadadesaojorge.png') }}" alt="">
                    <h3>Espada-de-São-Jorge</h3>
                    <p>Perfeita para ambientes internos, resistente e não precisa de muita água. Também ajuda na purificação do ar.</p>

                    <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg>
                                Ver Detalhes
                            </button>
                </div>

                <div class="produto">
                    <img src="{{ url('image/buqueRosas.png') }}" alt="">
                    <h3>Buquê com 12 Rosas Vermelhas</h3>
                    <p>Lindo Buquê com doze rosas vermelhas nacionais. Ideal para presentear alguém especial.</p>
                    
                    
                    <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg>
                                Ver Detalhes
                            </button>
                </div>

                <div class="produto">
                    <img src="{{ url('image/girassol.png') }}" alt="">
                    <h3>Flor Girassol</h3>
                    <p>O girassol é uma planta alta com flores grandes e amarelas que seguem o movimento do sol. Suas sementes são comestíveis e usadas para produzir óleo. É símbolo de alegria e luz.</p>

                    <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg>
                                Ver Detalhes
                            </button>
                </div>

                <div class="produto">
                    <img src="{{ url('image/gerbera.png') }}" alt="">
                    <h3>Vaso de Gérbera</h3>
                    <p>A gérbera é uma flor vibrante e colorida, conhecida por suas pétalas grandes e simétricas. Ela se assemelha a uma margarida e vem em várias cores, como vermelho, laranja, rosa, amarelo e branco.</p>

                    <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg>
                                Ver Detalhes
                    </button>
                </div>

                

            </div>
            
        </selection>
    </main>
    <footer>
        @include('include.footer')
    </footer>
</body>
</html>