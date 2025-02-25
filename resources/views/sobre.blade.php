<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sobre nós</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="icon" href="{{ asset('image/icon/icons8-pinheiro-162.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sobre.css') }}">
</head>
<body>
    <header>
        @include('include.header')
    </header>
    <main>
        <div class="caixa-sobre">
            <h1>Quem somos?</h1>
            <p>Somos um grupo que visa espalhar e conscientizar outros indivíduos sobre a importância que a fauna possui para a população mundial.
                <br> Em um mundo onde há a crescente da poluição atmosférica, poluição marinha e o aumento do aquecimento global, surge a necessidade da conscientização
                <br> sobre os perigos que recursos poluentes trazem para a saúde humana e para o meio ambiente.
            </p>

            <h1>Qual o nosso objetivo?</h1>
            <p>Nosso objetivo é espalhar o conhecimento acerca de plantas e conscientizar o povo a respeito da plantação de árvores no meio-ambiente.
                <br>Aqui, vendemos plantas e explicamos suas características acerca do mesmo, além de citar curiosidades interessantes sobre algumas plantas 
                <br>que talvez algumas pessoas não saibam. Além disso, postamos blogs sobre o prejuízo que está sendo afetado no meio-ambiente e detalhamos sobre.
            </p>

            <h1>Nosso trajeto</h1>
            <p>Começamos apenas como uma simples tela de login feita em PHP, mas nosso projeto evoluiu-se para um projeto para a feira tecnológica da Etec. 
                <br>Ao longo do caminho, enfrentamos desafios e dificuldades no desenvolvimento do projeto, superando obstáculos com o trabalho em equipe e com a 
                <br>colaboração da nossa equipe de desenvolvedores.
            </p>
        </div>
    </main>
    <footer>
        @include('include.footer')
    </footer>
</body>
</html>