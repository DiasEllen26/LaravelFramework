<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Clientes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
    <!-- Navbar -->
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-md">
            <a class="navbar-brand" href="#">
                <img src="https://static.vecteezy.com/system/resources/previews/024/190/109/original/kawaii-cloud-face-adorable-emotion-icon-for-children-decoration-free-png.png" alt="Imagem" style="width: 100px">
            </a>
        </div>
    </nav>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
