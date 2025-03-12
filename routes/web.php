<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu');
});

Route::get('sobre', function () {
    return view('sobre');
});

Route::get('contato', function () {
    return view('contato');
});

Route::get('produtos', function () {
    return view('produtos');
});

Route::get('categorias', function () {
    return view('categorias');
});

Route::get('carrinho', function () {
    return view('carrinho');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('login', function () {
    return view('login');
});

Route::get('cadastro', function () {
    return view('cadastro');
});

Route::get('menu-usuario', function () {
    return view('menu_usuario');
});

Route::get('cadastro-produto', function () {
    return view('cadastro_produto');
});

Route::get('controle-vendas', function () {
    return view('controle_Vendas');
});