<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" href="{{ asset('image/icon/icons8-pinheiro-162.png') }}" type="image/png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu Perfil</title>
        <link rel="stylesheet" href="{{ url('css/minha_conta.css') }}">
    </head>
<body>
    <header>
        @include('include.header')
    </header>
    <main id="main_usuario">
        <div class="container_usuario">
            <div class="titulo">
                <h2>Minha Conta</h2>
            </div>

            <div class="menu_usuario">
                <p>Nome:</p>
                <p>Email:</p>
                <p>Telefone:</p>
                <p>Endereço:</p>
                <p>CEP:</p>
                <p>Senha:</p>

                <div class="produtos_usuario">
                    <div class="titulo">
                        <h2>Meus Produtos</h2>
                    </div>
                    <div class="produtos">
                        <div class="divisoria">

                            <div class="produto">
                                <img src="{{ asset('image/liriodapaz.png') }}" alt="Produto 1">
                                <h3>Nome do Produto</h3>
                                <p>Preço: R$ 00,00</p>
                                <p>Quantidade: 0</p>
                                <button class="editar">Editar</button>
                                <button class="deletar">Excluir</button>
                            </div>

                            <div class="produto">
                                <img src="{{ asset('image/girassol.png') }}" alt="Produto 2">
                                <h3>Nome do Produto</h3>
                                <p>Preço: R$ 00,00</p>
                                <p>Quantidade: 0</p>
                                <button class="editar">Editar</button>
                                <button class="deletar">Excluir</button>
                            </div>

                            <div class="produto">
                                <img src="{{ asset('image/pazinha.png') }}" alt="Produto 3">
                                <h3>Nome do Produto</h3>
                                <p>Preço: R$ 00,00</p>
                                <p>Quantidade: 0</p>
                                <button class="editar">Editar</button>
                                <button class="deletar">Excluir</button>
                            </div>

                            <div class="produto">
                                <div class="add_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80%" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                    </svg>
                                </div>
                                <h3>Adicionar Produto</h3>
                                <p>Adicionar um novo produto em seu perfil</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        @include('include.footer')
    </footer>
</body>
</html>