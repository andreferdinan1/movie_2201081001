<!doctype html>
<html lang="en">
  <head>
    <style>
        .custom-card {
            margin: 0 21px;
             /* Atur margin kiri dan kanan sesuai kebutuhan */
        }
        .star {
            margin-right: 2px;
            position: absolute;
            color: goldenrod;
            font-size: 16px;
            /* Ukuran font bintang */
            display: flex;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 5px;
            border-radius: 5px;
        }
        .start1{
            color: goldenrod;
        }

        .star h5.rating {
            margin: 0;
            font-size: 15px;
            color: white;
            /* Ukuran font angka rating */
        }

        .bg {
            width: 100%;
            background-color: black; /* Warna latar belakang hitam */
            background: black;
        }
            .hd {
            margin-right: 2px;
            position: absolute;
            font-size: 25px;
            /* Ukuran font bintang */
            display: flex;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 5px;
            border-radius: 5px;
            }

    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AndreMovie - @yield('title', 'Homepage')</title>
    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-danger" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand" href="/">AndreMovie</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Movies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Watchlist</a>
              </li>
            </ul>
            <form class="d-flex" action="/search" method="GET">
              <input class="form-control me-2 bg-dark" name="q" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>

      </nav>

      <div class="container">
        @yield('content')
      </div>
    </div>
      <footer class="bg-danger text-white text-center py-3">
         &copy; {{ date('Y') }} by Andre Ferdinan
      </footer>

    <script src="/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>

