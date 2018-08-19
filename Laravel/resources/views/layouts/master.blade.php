<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Project - Andrés</title>
        <meta name="description" content="Projeto Integrador">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/app.css">
        <style>
        .form-control:disabled, .form-control[readonly]{
            background-color:#f8f9fa;
        }
        </style>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    </head>
    <body>
        <header id="top" class="main-header">
            <div class="container-fluid">
            
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
                    <!-- Brand -->
                    <a class="navbar-brand" href="#">Logo</a>

                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost:8080/Digital-House/Laravel/public/home">Home</a>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://localhost:8080/Digital-House/Laravel/public/actors" id="navbardrop" data-toggle="dropdown">
                            Actors
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="http://localhost:8080/Digital-House/Laravel/public/actors_pages">Listar Atores</a>
                                <a class="dropdown-item" href="http://localhost:8080/Digital-House/Laravel/public/actors">Filtrar Atores</a>
                                <a class="dropdown-item" href="http://localhost:8080/Digital-House/Laravel/public/actor/new">Inserir Ator</a>
                            </div>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://localhost:8080/Digital-House/Laravel/public/movies" id="navbardrop" data-toggle="dropdown">
                            Movies
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="http://localhost:8080/Digital-House/Laravel/public/movies_pages">Listar Filmes</a>
                                <a class="dropdown-item" href="http://localhost:8080/Digital-House/Laravel/public/movies">Filtrar Filmes</a>
                                <a class="dropdown-item" href="http://localhost:8080/Digital-House/Laravel/public/movie/new">Inserir Filme</a>
                            </div>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://localhost:8080/Digital-House/Laravel/public/genres" id="navbardrop" data-toggle="dropdown">
                            Genres
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="http://localhost:8080/Digital-House/Laravel/public/genres">Exibir Gêneros</a>
                                <a class="dropdown-item" href="http://localhost:8080/Digital-House/Laravel/public/genre/new">Inserir Gênero</a>
                            </div>
                        </li>

                        <li class="nav-item navbar-right">
                            <a class="nav-link" href="http://localhost:8080/Digital-House/Laravel/public/login">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        @yield('conteudo')

        <footer class="main-footer">
            <div class="text-center m-auto">&copy; <?php echo "Digital House - Laravel - " .date('Y'); ?></div>
            
        </footer>

    </body>
</html>