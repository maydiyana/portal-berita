<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DxL | {{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-bottom" >
        <div class="container ">
          <a class="navbar-brand" href="/posts">cabaca</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link  {{ ($title === "Home") ? 'active' : '' }}" href="/posts">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{ ($title === "About") ? 'active' : '' }}" href="/about">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Post") ? 'active' : '' }}" href="/blog">News</a>
              </li>
            </ul>

            <ul class="navbar-nav ms-auto ">
            @auth
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle " href="/dashboard" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-clipboard-data"></i> Dashboard</a></li>
                <li><hr class="dropdown-divider "></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                  <button type="submit" class="dropdown-item">
                    <i class="bi bi-x-octagon"></i> Logout</button>
                  </form>
              </ul>
            </li>
            @else
                  <li class="nav-item">
                    <a class="nav-link "href="/login"><i class="bi bi-door-open-fill"></i> Login</a>
                </li>
            @endauth
            </ul>

          </div>
        </div>
      </nav>

      <div class="container mt-3">
        @yield('container')
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>