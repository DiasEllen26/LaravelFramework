@extends('app')
@section('title', 'Detalhe do produto')
@section('content')

<div class="card">
            <div class="card-header">
                Detalhes do {{ $product->nome }}
            </div>
            <div class="card-body">
                <p><strong>ID: </strong> {{ $product->id }}</p>
                <p><strong>Nome: </strong> {{ $product->nome }}</p>
                <p><strong>Categoria: </strong> {{ $product->categoria }}</p>
                <p><strong>Preço: </strong> R$ {{ $product->preco }}</p>
                <br>
                <a class="btn btn-success" href="{{ route('products.index') }}">Voltar para a lista de produtos</a>
            </div>
        </div>
@endsection()
