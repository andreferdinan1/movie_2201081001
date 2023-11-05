@extends('layout.template')

@section('title', 'Search Results')

@section('content')
<h1 class="text-light">Search Results</h1>
@if (count($movies) > 0)
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card mb-4 h-100 mb-3">
                <div>
                <span class="star">&#9733; <h5 class="rating">{{ $movie['rating'] }}</h5>
                </span>
                </div>
                <img src="/images/{{ $movie['foto_sampul'] }}" class="card-img-top"
                    alt="{{ $movie['judul'] }} Poster">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $movie['judul'] }}</h5>
                    <a href="/movie/{{ $movie['id'] }}" class="btn btn-danger btn-block">Lihat
                        Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@else
    <p class="text-light">TIDAK ADA FILM</p>
@endif
@endsection
