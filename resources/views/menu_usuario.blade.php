<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>

    <!-- Ícone -->
    <link rel="icon" href="{{ asset('image/icon/icons8-pinheiro-162.png') }}" type="image/png">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="{{ url('css/minha_conta.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <header>
        @include('include.header')
    </header>

    <main id="main_usuario" class="container my-4">
        <div class="row">
            <!-- Menu lateral -->
            <div class="col-md-3 mb-4">
                <div class="card text-center p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="gray" class="bi bi-person-circle mx-auto" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                    <hr>
                    <p><strong>Nome:</strong></p>
                    <p><strong>Email:</strong></p>
                    <p><strong>Telefone:</strong></p>
                    <p><strong>Endereço:</strong></p>
                    <p><strong>CEP:</strong></p>
                    <p><strong>Senha:</strong></p>
                </div>
            </div>

            <!-- Área de produtos -->
            <div class="col-md-9">
                <div class="titulo mb-3">
                    <h2>Meus Produtos</h2>
                </div>
                <div class="row g-4">
                    <!-- Produto 1 -->
                    <div class="col-md-4">
                        <div class="card h-100 text-center">
                            <img src="{{ asset('image/liriodapaz.png') }}" class="card-img-top" alt="Produto 1">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Produto</h5>
                                <p>Preço: R$ 00,00</p>
                                <p>Quantidade: 0</p>
                                <button class="btn btn-success btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </div>
                        </div>
                    </div>

                    <!-- Produto 2 -->
                    <div class="col-md-4">
                        <div class="card h-100 text-center">
                            <img src="{{ asset('image/girassol.png') }}" class="card-img-top" alt="Produto 2">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Produto</h5>
                                <p>Preço: R$ 00,00</p>
                                <p>Quantidade: 0</p>
                                <button class="btn btn-success btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </div>
                        </div>
                    </div>

                    <!-- Produto 3 -->
                    <div class="col-md-4">
                        <div class="card h-100 text-center">
                            <img src="{{ asset('image/pazinha.png') }}" class="card-img-top" alt="Produto 3">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Produto</h5>
                                <p>Preço: R$ 00,00</p>
                                <p>Quantidade: 0</p>
                                <button class="btn btn-success btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </div>
                        </div>
                    </div>

                    <!-- Adicionar produto -->
                    <div class="col-md-4">
                        <div class="card h-100 text-center d-flex justify-content-center align-items-center p-3">
                            <button class="btn btn-outline-success rounded-circle mb-3" style="width: 80px; height: 80px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                                    <path d="M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                                </svg>
                            </button>
                            <h5>Adicionar Produto</h5>
                            <p class="mb-0">Adicionar um novo produto em seu perfil</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="mt-5">
        @include('include.footer')
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>