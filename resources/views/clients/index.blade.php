@extends('app')
@section('title', 'Lista de Clientes')
@section('content')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://templates.simplified.co/thumb/21c9bd81-d144-41a6-a4b8-3f729238e4d5.jpg" alt="First slide">
        </div>
    </div>
</div>

<h1 class="text-center">Todos os clientes</h1>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Endereço</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <th>{{ $client->id }}</th>
                <td>
                    <a href="{{ route('clients.show', $client) }}">{{ $client->nome }}</a>
                </td>
                <td>{{ $client->endereco }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('clients.create') }}" class="btn btn-success">
        Cadastrar
    </a>
</div>

@endsection
