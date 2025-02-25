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
            <div class="divisoria" style="color:antiquewhite;">
                <div> <!-- forms -->

                    <form action="" method="POST">
                            <center>
                                <h1>Cadastro de Cliente </h1><br>
                            </center>

                            <label for="username">Nome de Usuário:</label><br>
                            <input class="form-input" type="text" id="nome" name="nome" placeholder="Insira um nome de usuário" required>
                            
                            <label for="username">Endereço:</label><br>
                        <input class="form-input" type="text" id="endereco" name="endereco" placeholder="Digite o seu Endereço" required>
                        
                        <label for="username">Email:</label><br>
                        <input class="form-input" type="text" id="email" name="email" placeholder="Insira o seu e-mail" required>
                        
                        <label for="username">Numero do Celular:</label><br>
                        <input class="form-input" type="number" id="numcell" name="numcell" placeholder="(xx) xxx xxx xxx" required>
                        
                        <div class="divisoria">
                            <div><!--senha -->
                                <label for="password">Senha:</label><br>
                                <input class="form-input" type="password" id="senha" name="senha" placeholder="Insira uma senha" required>
                            </div>

                            <div><!--confirmar senha -->
                                <label for="password">Repita sua senha:</label><br>
                                <input class="form-input" type="password" id="senha2" name="senha2" placeholder="Confirme sua senha" required>
                            </div>
                        </div>
                        
                        
                        <input type="checkbox" name="robot" id="robot" required>
                        <label>Não sou um robo</label>
                        
                        <div style="left:10px;">
                            <button class="login-btn" id="btn-cadastro" type="submit" value="Cadastrar">Cadastrar</button>
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