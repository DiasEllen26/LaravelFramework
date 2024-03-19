@extends('app')
<!-- Altera o titulo para Lista de clientes -->
@section('title', 'Lista de Clientes')
@section('content')
<h1 class="text-center">Todos os cafés</h1>

<div class="container">
    <table class="table table-hover table-dark ">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome Café</th>
                <th scope="col">Temperatura</th>
                <th class="col">Saiba mais</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($cafes as $cafe)
            <tr>
                <th scope="row">{{ $cafe->id}}</th>
                <td>{{ $cafe->nome}}</td>
                <td>{{ $cafe->tipo}}</td>
                <td> <a href="{{ route('cafes.show', $cafe) }}" class="btn btn-success">Detalhes</a></td>
            <tr>
                @endforeach
        </tbody>
    </table>
    @endsection
