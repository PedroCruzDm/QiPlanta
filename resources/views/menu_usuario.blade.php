<!DOCTYPE HTML>
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
                <h2 script="color:white">Minha Conta</h2>
            </div>

    <div class="menu_usuario">
        <div class="menuP1">
            <span class="profile">
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="gray" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg>
</span>
            <span>
                <p>Nome:</p>
                <p>Email:</p>
                <p>Telefone:</p>
                <p>Endereço:</p>
                <p>CEP:</p>
                <p>Senha:</p>
                <span>
        </div>
              
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
                                <button style="border-style: hidden; border-radius: 50%; cursor:pointer" class="btn-hover">
                                    <svg class="bi bi-plus-circle-dotted" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                                    </svg>
                                </button>

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