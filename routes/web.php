<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QRCodeController;

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

Route::get('cadastroproduto', function () {
    return view('qrcode');
});


Route::post('produtos/store', [ProdutoController::class, 'store'])->name('produtos.store');
Route::get('produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::post('produtos/edit/{id}', [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::get('produtos/listar', [ProdutoController::class, 'listarControleVendas'])->name('produtos.listar');

Route::post('qrcode/generate', [QRCodeController::class, 'generate'])->name('qrcode.generate');

Route::get('qrcode', [QRCodeController::class, 'showQRCodeForm'])->name('qrcode.form');
Route::get('qrcode', [QRCodeController::class, 'index'])->name('qrcode.index');

// Rotas para UserController
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('usuarios', [UserController::class, 'index'])->name('usuarios.index');
Route::get('usuarios/{id}', [UserController::class, 'show'])->name('usuarios.show');
Route::post('usuarios', [UserController::class, 'store'])->name('usuarios.store');
Route::put('usuarios/{id}', [UserController::class, 'update'])->name('usuarios.update');
Route::delete('usuarios/{id}', [UserController::class, 'destroy'])->name('usuarios.destroy');
