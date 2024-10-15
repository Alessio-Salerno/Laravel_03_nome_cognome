<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="/style.css">

</head>
<body>



<!-- NAV -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="/">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('chi.siamo')}}">Chi siamo</a>
</li>


<li class="nav-item">
<a class="nav-link" href="{{route('docenti')}}">Docenti</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/dove-siamo">Dove siamo</a>
</li>


<li class="nav-item">
<a class="nav-link" href="/cosa-sappiamo">Cosa Sappiamo</a>
</li>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
I nostri servizi
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="{{route('movie.list')}}">Tutti i nostri film</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link disabled" aria-disabled="true">Disabled</a>
</li>
</ul>
<form class="d-flex" role="search">
<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success" type="submit">Search</button>
</form>
</div>
</div>
</nav>




<!-- FINE NAV -->

<header class="header">
  <div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6 col-12 text-center">
        <h2 class="text-center text-black">Tutti i film</h2>
      </div>
    </div>

    <div class="row g-4 justify-content-center"> 
      @foreach ($movies as $movie)
        <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center mb-4"> 
          <div class="card cardImg" style="width: 18rem;">
            <img src="{{$movie['img']}}" class="card-img-top" alt="poster di `{{$movie['title']}}`" style="height:270px;">
            <div class="card-body">
              <h5 class="card-title">{{$movie['title']}}</h5>
              <h6 class="card-subtitle text-muted">{{$movie['director']}}</h6>
              <p class="card-text">{{$movie['genere']}}</p>
              <a href="{{route('movieDetail', ['id' => $movie['id']])}}" class="btn btn-primary">Leggi di più</a>
            </div>
          </div> 
        </div>
      @endforeach
    </div>
  </div>
</header>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>