@extends('app')
@section('title', 'Lista de Produtos')
@section('content')
<h1 class="text-center">Lista de produtos </h1>

<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Categoria</td>
            <td>Preço</td>
            <td>Detalhes</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <th>{{ $product->id }}</th>
            <td>{{ $product->nome }}</td>
            <td>{{ $product->categoria }}</td>
            <td>R$ {{ $product->preco }}</td>
            <td>
                <a href=" {{ route('products.show', $product) }} " class="btn btn-success">
                    Detalhes
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection()
