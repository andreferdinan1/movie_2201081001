@extends('layout.template')

@section('title', 'Homepage')

@section('content')

<div class="navbar-dark">
<div class="container1 mb-4 mt-2 bg-dark">
    <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/images/fast.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block text-light">
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/images/jl.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="/images/jhon.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button"  data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon " aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>
</div>

  <div class="container text-center mb-4 text-danger"><h2 class="title">TOP MOVIES</h2></div>
  <div class="row">
    @foreach ($movies as $movie)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card mb-4 h-100 mb-3">
                <div class="position-relative">
                    <span class="star">&#9733;  <h5 class="rating">{{ $movie['rating'] }}</h5></span>
                    <img src="/images/{{ $movie['foto_sampul'] }}" class="card-img-top" alt="{{ $movie['judul'] }} Poster">
                    @if ($movie['hd'])
                        <span class="hd badge bg-success position-absolute top-0 end-0 fs-6">HD</span>
                    @endif
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $movie['judul'] }}</h5>
                    <a href="/movie/{{ $movie['id'] }}" class="btn btn-danger btn-block">Detail</a>
                    <a href="#" class="btn btn-success   btn-block">Nonton Movie</a>
                </div>
            </div>
        </div>
    @endforeach
</div>





@endsection
<div >


