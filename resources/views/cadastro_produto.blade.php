<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="icon" href="{{ asset('image/icon/icons8-pinheiro-162.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/cadastro&login.css') }}">
</head>
<body>
    <header>
        @include('include.header')
    </header>
    <main>
        <div class="container-cadastro">
            <div class="divisoria">
                <div><!-- forms -->
                    <form action="" method="POST">
                        
                        <center>
                            <h1>Adicionar Produto</h1><br>
                        </center>

                        <label for="nome">Nome do Produto:</label><br>
                        <input class="form-input" type="text" id="nome" name="nome" placeholder="Insira o nome do produto" required>

                        <label for="preco">Preço:</label><br>
                        <input class="form-input" type="number" id="preco" name="preco" placeholder="Insira o preço do produto" required>

                        <label for="estoque">Estoque:</label><br>
                        <input class="form-input" type="number" id="estoque" name="estoque" placeholder="Insira a quantidade em estoque" required>

                        <label for="categoria">Categoria:</label><br>
                        <select class="form-input" name="categoria" id="categoria" required>
                            <option value="1">Plantas</option>
                            <option value="2">Vasos</option>
                            <option value="3">Ferramentas</option>
                            <option value="4">Adubos</option>
                        </select>

                        <label for="descricao">Descrição:</label><br>
                        <textarea class="form-input" style="resize: vertical" name="descricao" id="descricao" cols="30" rows="10" placeholder="Insira uma descrição do produto" required></textarea>

                        <label for="imagem">Imagem:</label><br>
                        <input class="form-input" type="file" id="imagem_produto" style="color:black;" name="imagem" required>

                        <div style="left:10px;">
                            <button class="login-btn" id="btn-cadastro_produto" type="submit" value="Cadastrar_produto">Adicionar produto</button>
                        </div>

                </div>
                
                <div style="    display: flex; align-items: center; justify-content: center; height: 100%;"><!--logo-->
                    <img src="{{ url('image/icon/QiPlantaPWA512.png') }}" style="width: 260px;" alt="Qi Planta">
                </div>
                    
        </div>
    </div>
    </main>

<footer>
    @include('include.footer')
</footer>
</body>