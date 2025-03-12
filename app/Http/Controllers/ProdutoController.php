<?php
namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller{
    
        public function cadastrarProduto(Request $request){
            $produto = new Produto();
            $produto->name_produto = $request->name_produto;
            $produto->preco = $request->preco;
            $produto->categoria = $request->categoria;
            $produto->descricao = $request->descricao;
            $produto->imagem = $request->imagem;
            $produto->video = $request->video;
            $produto->quantidade = $request->quantidade;
            $produto->status = $request->status;
            $produto->save();
        }

    public function listarProdutos(){
        $user_produto = Produto::orderBy('id', 'desc')->get();
        return view('controle-vendas', ['user_produto' => $user_produto]);
    }

    public function editarProduto(Request $request, $id){
        $produto = Produto::find($id);
        $produto->name_produto = $request->name_produto;
        $produto->preco = $request->preco;
        $produto->categoria = $request->categoria;
        $produto->descricao = $request->descricao;
        $produto->imagem = $request->imagem;
        $produto->video = $request->video;
        $produto->quantidade = $request->quantidade;
        $produto->status = $request->status;
        $produto->save();
    }

}