<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Controle de Vendas</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="icon" href="{{ asset('image/icon/icons8-pinheiro-162.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/controle_vendas.css') }}">
    <script src="{{ url('js/controle_vendas') }}"></script>
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
                <button id="btn_adicionar" name="btn_adicionar">Adicionar produto</button>
            </div>
            <div class="produtos_tabelas">
                <p>Produtos: <?php echo("");?></p>

                <script>
                    let check_all = document.getElementById('check_all').addEventListener('click', () => {
                        let checks = document.querySelectorAll('input[name="check"]').forEach(checks => {
                            checks.checked = check_all.checked;
                        });

                    });

                </script>
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
                        <td>Imagem</td>
                        <td></td>
                        <td>Estoque</td>
                        <td>Preço</td>
                        <td>Descrição</td>
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
                        <td>Imagem</td>
                        <td></td>
                        <td>Estoque</td>
                        <td>Preço</td>
                        <td>Descrição</td>
                        <td>---</td>
                        <td></td>
                        <td>
                            <button id="btn_editar" name="btn_editar">Editar</button>
                            <button id="btn_excluir" name="btn_excluir">Excluir</button>
                        </td>
                    </tr>
                    <tr>

    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const marcarTudo = document.getElementById("check_all");
            const checkboxes = document.querySelectorAll(".opcao");
    
            marcarTudo.addEventListener("change", function () {
                checkboxes.forEach(checkbox => {
                    checkbox.checked = marcarTudo.checked;
                });
            });
    
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener("change", function () {
                    marcarTudo.checked = [...checkboxes].every(c => c.checked);
                });
            });
        });
    </script>
                    </tr>
                </table>
            </div>
                
        </div>

    </main>
</body>