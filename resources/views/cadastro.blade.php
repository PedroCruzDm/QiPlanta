<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marketplace - cadastro</title>
    <link rel="icon" href="{{ asset('image/icon/icons8-pinheiro-162.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ url('css/cadastro&login.css') }}">
</head>

<body>
    <header>
        @include('include.header')
    </header>

    <main>
        <div class="container-cadastro">
            <div class="divisoria">

                <div>
                    <form action="{{ route('usuarios.store') }}" method="POST">
                        @csrf

                        <center>
                            <h1>Cadastro de Cliente </h1><br>
                        </center>

                        <label for="name">Nome de Usuário:</label><br>
                        <input class="form-input" type="text" id="name" name="name" placeholder="Insira um nome de usuário" required>

                        <label for="endereco">Endereço:</label><br>
                        <input class="form-input" type="text" id="endereco" name="endereco" placeholder="Digite o seu Endereço" required>

                        <label for="email">Email:</label><br>
                        <input class="form-input" type="email" id="email" name="email" placeholder="Insira o seu e-mail" required>

                        <label for="numcell">Número do Celular:</label><br>
                        <input class="form-input" type="text" id="numcell" name="numcell" placeholder="(xx) xxx xxx xxx" required>

                        <div class="divisoria">
                            <div>
                                <label for="password">Senha:</label><br>
                                <input class="form-input" type="password" id="password" name="password" placeholder="Insira uma senha" required>
                            </div>

                            <div>
                                <label for="password_confirmation">Repita sua senha:</label><br>
                                <input class="form-input" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirme sua senha" required>
                            </div>
                        </div>

                        <div style="left:10px;">
                            <button class="login-btn" id="btn-cadastro" type="submit">Cadastrar</button>
                        </div>
                    </form>

                </div>
                <div class="divisoria-cadastro-login">
                    <center>
                        <img src="{{ url('image/QiPlanta.png') }}" alt="Logo do Marketplace" style="height: 200px; margin-top: 40px;">
                        <p>Ja possui uma conta? <br></p> <br>
                        <a href="{{ url('login') }}">
                            <button type="button" class="login-btn">Login</button>
                        </a>
                    </center>
                </div>
            </div>
        </div>
        </div>
    </main>

    <footer>
        @include('include.footer')
    </footer>
</body>