<!doctype html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">-->
        <link rel="stylesheet" href="{{ asset('/css/mangas.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/bootstrap/bootstrap.min.css') }}">
        <title>
            @yield('titrePage')
        </title>
    </head>
    <body>
        <header>
            @yield('titreItem')
            <nav class="navbar navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">MangaWorld</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Actualités</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Voir
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{url('/dessinateurs')}}">Les dessinateurs</a></li>
                            <li><a class="dropdown-item" href="{{url('/scenaristes')}}">Les scénaristes</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    </div>
                </div>
                </nav>
        </header>
        @yield('contenu')
        <footer class="footer">
            MangaWeb - copyright 3A Info - 2021
        </footer>
        <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>-->
        <script type='text/javascript' src="{{ asset('/lib/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>