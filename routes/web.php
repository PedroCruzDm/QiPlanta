<?php
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

// Route::get('qrcode/download/{filename}', [QRCodeController::class, 'download'])->name('qrcode.download');
// Route::get('qrcode/visualizar/{id}', [QRCodeController::class, 'visualizar'])->name('qrcode.visualizar');
// Route::get('qrcode/atualizar/{id}', [QRCodeController::class, 'atualizar'])->name('qrcode.atualizar');
// Route::get('qrcode/editar/{id}', [QRCodeController::class, 'edit'])->name('qrcode.editar');
// Route::get('qrcode/destroy/{id}', [QRCodeController::class, 'destroy'])->name('qrcode.destroy');
// Route::get('qrcode/listar', [QRCodeController::class, 'listarControleVendas'])->name('qrcode.listar');
// Route::get('qrcode/gerar', [QRCodeController::class, 'gerar'])->name('qrcode.gerar');

// Route::post('user/store', [UserController::class, 'store'])->name('user.store');
// Route::get('user', [UserController::class, 'index'])->name('user.index');
// Route::post('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
// Route::get('user/listar', [UserController::class, 'listarControleVendas'])->name('user.listar');
// Route::get('user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
// Route::get('user/editar/{id}', [UserController::class, 'edit'])->name('user.editar');
// Route::get('user/atualizar/{id}', [UserController::class, 'atualizar'])->name('user.atualizar');
// Route::get('user/visualizar/{id}', [UserController::class, 'visualizar'])->name('user.visualizar');

