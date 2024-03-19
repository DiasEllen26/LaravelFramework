@extends('app')
@section('title', 'Detalhes do cliente')
@section('content')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://templates.simplified.co/thumb/21c9bd81-d144-41a6-a4b8-3f729238e4d5.jpg" alt="First slide">
    </div>
  </div>
</div>

    <h1 class="text-center">Cliente</h1>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Detalhes do Cliente {{ $client->nome }}
            </div>
            <div class="card-body">
                <p><strong>ID: </strong> {{ $client->id }}</p>
                <p><strong>Nome: </strong> {{ $client->nome }}</p>
                <p><strong>Endereço: </strong> {{ $client->endereco }}</p>
                <p><strong>Observação: </strong> {{ $client->observacao }}</p>
                <br>
                <a class="btn btn-success" href="{{ route('clients.index') }}">Voltar para a lista de clientes</a>
            </div>
        </div>
    </div>

@endsection
