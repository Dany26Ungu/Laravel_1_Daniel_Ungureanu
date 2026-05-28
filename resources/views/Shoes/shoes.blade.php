<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SHOP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><i class="bi bi-shop"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('aboutUs')}}">Chi siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacts')}}">Contatti</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              I nostri prodotti
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('Shoes.list')}}">Shop</a></li>
            </ul>
          </li>
      </div>
    </div>
  </nav>

  <div class="container-fluid shoes">
    <div class="row h-100 justify-content-center">
      <div class="row">
        <h2 class="display-5 text-white text-center text-color">Tutte le nostre scarpe</h2>
      </div>
      @foreach ($shoes as $Shoes)
      <div class="col-12 col-md-4">
        <div class="card mb-3" style="width: 18rem;">
          <img src="{{ $Shoes['img']}}" class="card-img-top cardImg" alt="foto di scarpe">
          <div class="card-body">
            <h5 class="card-title">{{$Shoes['brand']}}</h5>
            <h5 class="card-title muted">{{$Shoes['model']}}</h5>
            <a href="{{route('shoes.detail', ['id'=>$Shoes['id']])}}" class="btn btn-primary">Leggi di più</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>