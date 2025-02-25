<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sobre nós</title>
    <link rel="icon" href="{{ url('image/icon/icons8-pinheiro-162.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ url('css/contato.css') }}">
</head>
<body>
    <header>
        @include('include.header')
    </header>
    <main>
        <div class="container">
            <h1>Entre em Contato Conosco</h1>
            <p>Se você tem alguma dúvida, sugestão ou deseja saber mais sobre nossos produtos, entre em contato preenchendo o formulário abaixo:</p>

            <form method="POST" action="">
                <input class="form-input" type="text" name="nome" placeholder="Digite seu nome" required>
                <input class="form-input" type="email" name="email" placeholder="Digite seu email" required>
                <input class="form-input" type="text" name="assunto" placeholder="Assunto" required>
                <textarea style="resize: vertical" class="form-input" name="mensagem" placeholder="Escreva sua mensagem aqui..." required></textarea>
                <button type="submit" class="login-btn">Enviar</button>
            </form>
        </div>
    </main>
    <footer>
        @include('include.footer')
    </footer>
</body>
</html>