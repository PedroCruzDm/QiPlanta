@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Produto</h1>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" class="form-control" id="preco" name="preco" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
    </form>

    <hr>

    <h2>Gerar QR Code</h2>
    <form action="{{ route('qrcode.generate') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="produto_id" class="form-label">Selecione o Produto</label>
            <select class="form-control" id="produto_id" name="produto_id" required>
                @foreach($produtos as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Gerar QR Code</button>
    </form>
</div>
@endsection