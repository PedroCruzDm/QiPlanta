<?php
namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->categoria = $request->categoria;
        $produto->descricao = $request->descricao;
        $produto->imagem = $request->imagem;
        $produto->video = $request->video;
        $produto->quantidade = $request->quantidade;
        $produto->status = $request->status;
        $produto->save();

        return redirect()->back()->with('success', 'Produto cadastrado com sucesso!');
    }

    public function index()
    {
        $produtos = Produto::orderBy('id', 'desc')->get();
        return view('controle_Vendas', ['produtos' => $produtos]);
    }

    public function edit(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->categoria = $request->categoria;
        $produto->descricao = $request->descricao;
        $produto->imagem = $request->imagem;
        $produto->video = $request->video;
        $produto->quantidade = $request->quantidade;
        $produto->status = $request->status;
        $produto->save();

        return redirect()->back()->with('success', 'Produto atualizado com sucesso!');
    }

    public function listarControleVendas()
    {
        $produtos = Produto::orderBy('id', 'desc')->get();
        return view('controle-vendas', ['produtos' => $produtos]);
    }
}