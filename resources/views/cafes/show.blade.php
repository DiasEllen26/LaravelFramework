<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cafés</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
    <!-- Navbar -->
    <nav class="navbar shadow-sm " data-bs-theme="dark">
        <div class="container-md">
            <a class="navbar-brand" href="#">
                <img src="https://desbloqueandoseupotencial.com.br/wp-content/uploads/2018/02/starbucks-logo-png-1.png" alt="Imagem" style="width: 200px">
            </a>
        </div>
    </nav>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.starbucks.ae/sites/starbucks-ae/files/styles/c03_image_text_1133x476/public/2022-11/SBX%20WC%20horizontal%20Banner%201133%20x%20476%20Eng%20.jpg.webp?itok=g0j6IwiP" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.tastingtable.com/img/gallery/20-menu-items-from-starbucks-japan-we-wish-we-had-in-the-us/intro-1688748810.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://assets.grab.com/wp-content/uploads/sites/4/2023/07/11145908/GrabAds_CaseStudy_Starbucks-Stamp-Card_Web_Masthead_1920x809.jpg" class="d-block w-100" alt="...">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h1 class="text-center">Café</h1>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Detalhes do café <strong>{{ $cafe->nome }} </strong>
            </div>
            <div class="card-body">
                <p><strong>ID: </strong> {{ $cafe->id }}</p>
                <p><strong>Nome: </strong> {{ $cafe->nome }}</p>
                <p><strong>Temperatura: </strong> {{ $cafe->tipo }}</p>
                <br>
                <a class="btn btn-success" href="{{ route('clients.index') }}">Voltar</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
