<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Controle de Vendas</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="icon" href="{{ asset('image/icon/icons8-pinheiro-162.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/controle_vendas.css') }}">
    <script src="{{ url('js/controle_vendas.js') }}" type="module"></script>
</head>
<body>
    <header>
        @include('include.header')
    </header>
    <main>
        <div class="container-controle-vendas">
            <div class="titulo">
                <h3>Produtos</h3>
            </div>

            <div class="header_produtos">
                <input type="text" id="filtrar" name="filtrar" placeholder="Nome do Produto">
                <button id="btn-busca" type="submit">Pesquisar</button>

                <button id="btn_organizar" name="btn_organizar">filtrar</button>
                <button id="btn_organizar_novo" name="btn_organizar_novo">Mais recentes</button>

                <a href="{{ url('cadastro-produto') }}">
                    <button id="btn_adicionar" name="btn_adicionar">Adicionar produto</button>
                </a>

            </div>
            <div class="produtos_tabelas">
                <p>Produtos: <?php echo("");?></p>
                
                <table class="tabela_produtos">
                    <tr>
                        <th>
                            <input type="checkbox" id="check_all">
                        </th>
                        <th>Nome</th>
                        <th>Imagem</th>
                        <th>Video (opcional)</th>
                        <th>Estoque</th>
                        <th>Preço</th>
                        <th>Descrição</th>
                        <th>Status</th>
                        <th>Criação</th>
                        <th>Ações</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" class="opcao">
                        </td>
                        <td>Nome do Produto</td>
                        <td>
                            <img src="" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>---</td>
                        <td></td>
                        <td>
                            <button id="btn_editar" name="btn_editar">Editar</button>
                            <button id="btn_excluir" name="btn_excluir">Excluir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" class="opcao">
                        </td>
                        <td>Nome do Produto</td>
                        <td>
                            <img src="" alt="">
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>---</td>
                        <td></td>
                        <td>
                            <button id="btn_editar" name="btn_editar">Editar</button>
                            <button id="btn_excluir" name="btn_excluir">Excluir</button>
                        </td>
                    </tr>

                </table>
            </div>
                
        </div>

    </main>
</body>