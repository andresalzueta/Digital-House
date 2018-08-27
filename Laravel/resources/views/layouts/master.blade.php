<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Projeto -->
    <meta name="description" content="Projeto Integrador">

    <!-- Bootstrap Projetoe-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/app.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Javascripts Projeto -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles Projeto -->
    <style>
        .form-control:disabled, .form-control[readonly]{
            background-color:#f8f9fa;
        }
    </style>
  
</head>

<body>
    <div id="app">
        <header id="top" class="main-header">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/') }}/actors" id="navbardrop" data-toggle="dropdown">
                                Actors
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('/') }}/actors_pages">Listar Atores</a>
                                    <a class="dropdown-item" href="{{ url('/') }}/actors">Filtrar Atores</a>
                                    <a class="dropdown-item" href="{{ url('/') }}/actor/new">Inserir Ator</a>
                                </div>
                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/') }}/movies" id="navbardrop" data-toggle="dropdown">
                                Movies
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('/') }}/movies_pages">Listar Filmes</a>
                                    <a class="dropdown-item" href="{{ url('/') }}/movies">Filtrar Filmes</a>
                                    <a class="dropdown-item" href="{{ url('/') }}/movie/new">Inserir Filme</a>
                                </div>
                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/') }}/genres" id="navbardrop" data-toggle="dropdown">
                                Genres
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('/') }}/genres">Exibir Gêneros</a>
                                    <a class="dropdown-item" href="{{ url('/') }}/genre/new">Inserir Gênero</a>
                                </div>
                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/') }}/users" id="navbardrop" data-toggle="dropdown">
                                Usuários
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('/') }}/users">Exibir Usuários</a>
                                    <a class="dropdown-item" href="{{ url('/') }}/user/new">Inserir Usuário</a>
                                    <a class="dropdown-item" href="{{ url('/') }}/roles">Exibir Funções</a>
                                    <a class="dropdown-item" href="{{ url('/') }}/role/new">Inserir Função</a>

                                </div>
                            </li>

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
  
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-3 bg-white">
            @yield('content')
        </main>

        <footer id="bottom" class="main-footer ">
            <div class="text-center m-auto">&copy; <?php echo "Digital House - Laravel - " .date('Y'); ?></div>
        </footer>

    </div>


</body>
</html>
