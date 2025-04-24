<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="{{ asset('image/icon/icons8-pinheiro-162.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ url('css/cadastro&login.css') }}">
</head>

<body>
    <header>
        @include('include.header')
    </header>

    <main>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="container-login">
                <div class="divisoria">
                    <div class="div-login-cadastro">
                        <div class="caixa-cadastro-login">
                            <h2 style="margin-top:15px;">Cadastrar-se</h2><br>
                            <p>Ainda não possui uma conta em nosso site?</p>
                        </div>
                        <div class="div-btn-cadastro-login">
                            <a href="{{ url('cadastro') }}" class="btn-cadastro-login">Cadastrar</a>
                        </div>
                    </div>

                    <div>
                        <div class="titulo-login">
                            <center>
                                <h2>Login</h2>
                            </center>
                        </div>

                        <input class="form-input" type="text" name="nome" placeholder="Digite o nome do Usuário" required>
                        <input class="form-input" type="password" name="senha" placeholder="Digite a Senha" required>
                        <button type="submit" class="login-btn">Login</button>
                    </div>
                </div>
            </div>
        </form>

        </div>
        </div>

    </main>

    <footer>
        @include('include.footer')
    </footer>
</body>