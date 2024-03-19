@extends('app')
@section('title', 'Cadastrar Cliente')
@section('content')
<h1 class="text-center">Criar novo Cliente </h1>

<form class="border border-info m-4 rounded" action="{{ route('clients.store') }}" method="POST">
    @csrf
  <div class="form-group m-2">
    <label for="nome">Nome <i class="bi bi-person-square"></i></label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do Cliente">
  </div>

  <div class="form-group m-2">
    <label for="endereco">Endereço</label>
    <input class="form-control" type="text" id="endereco" name="endereco" placeholder="Digite o endereço do Cliente">
  </div>

  <div class="form-group m-2">
    <label for="observacao">Observação</label>
    <textarea class="form-control" name="observacao" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-info text-center m-3">Criar</button>

</form>

@endsection
