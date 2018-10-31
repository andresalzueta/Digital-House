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
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/estilo.css">

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
            <nav class="{{--img-fluid2--}} navbar navbar-expand-md navbar-laravel col-sm-12 col-md-12 col-lg-12" style="padding: 0px;">
                <div class="contHeader container col-sm-12 col-md-12 col-lg-12" style="position:fixed; bottom: 609.587; top: 0px;top: 0px; right: 0px;">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{-- {{ config('app.name', 'Laravel') }} --}}
                        <img src="{{url('img/logo/ex3tr')}}.png" width="190" style="
                            margin-left: 10px; height: 100px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="">
                            <img src="{{url('img/hamburger_tr2')}}.png" width="30" style="height: 30px;"> 
                        </span>
                    </button>

                    <div class="menuHeader collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/') }}/genres" id="navbardrop" data-toggle="dropdown">
                                Marcas
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('/') }}/brands_pages">Listar Marcas</a>
                                    @if ( auth()->check() )
                                       @if (auth()->user()->hasRole('Admin'))
                                            <a class="dropdown-item" href="{{ url('/') }}/brands">Filtrar Marcas</a>                                  
                                            <a class="dropdown-item" href="{{ url('/') }}/brand/new">Inserir Marca</a>
                                        @endif
                                    @endif
                                </div>
                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/') }}/genres" id="navbardrop" data-toggle="dropdown">
                                Categorias
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('/') }}/categories_pages">Listar Categorias</a>
                                    @if ( auth()->check() )
                                         @if (auth()->user()->hasRole('Admin'))
                                            <a class="dropdown-item" href="{{ url('/') }}/categories">Filtrar Categorias</a>                                  
                                            <a class="dropdown-item" href="{{ url('/') }}/category/new">Inserir Categoria</a>
                                        @endif
                                    @endif
                                </div>
                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/') }}/products" id="navbardrop" data-toggle="dropdown">
                                Produtos
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('/') }}/products_pages">Listar Produtos</a>
                                    @if ( auth()->check() )
                                         @if (auth()->user()->hasRole('Admin'))
                                            <a class="dropdown-item" href="{{ url('/') }}/products">Filtrar Produtos</a>
                                            <a class="dropdown-item" href="{{ url('/') }}/product/new">Inserir Produto</a>
                                        @endif
                                    @endif
                                </div>
                            </li>
                            @if ( auth()->check() )
                                @if (auth()->user()->hasRole('Admin'))
                                    <!-- Dropdown -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{ url('/') }}/products" id="navbardrop" data-toggle="dropdown">
                                        Pedidos
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ url('/') }}/orders_pages">Listar Pedidos</a>
                                            <a class="dropdown-item" href="{{ url('/') }}/orders">Filtrar Pedidos</a>
                                            <a class="dropdown-item" href="{{ url('/') }}/order/new">Inserir Pedido</a>
                                        </div>
                                    </li>
                                    <!-- Dropdown -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{ url('/') }}/movies" id="navbardrop" data-toggle="dropdown">
                                        Clientes
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ url('/') }}/customers_pages">Listar Clientes</a>
                                            <a class="dropdown-item" href="{{ url('/') }}/customers">Filtrar Clientes</a>
                                            <a class="dropdown-item" href="{{ url('/') }}/customer/new">Inserir cliente</a>
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
                                @endif
                            @endif
                            <!-- Dropdown -->
                            {{-- <li class="nav-item">
                                <a class="nav-link dropdown-toggle" href="{{ route('register') }}" id="navbardrop" data-toggle="dropdown">{{ __('Register') }}
                                </a>
                            </li> --}}
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
  
                            <!-- Authentication Links -->
                            @guest
                                <button class="btn btn-default" type="button";>
                                    <a href="{{route('home')}}">
                                        <img class="home-img">
                                    </a>
                                </button>
                                <button class="btn btn-default" type="button";>
                                    <a href="{{route('login')}}">
                                        <img class="entrar-img">
                                    </a>
                                </button>
                                <button class="btn btn-default" type="button";>
                                    <a href="{{route('contato')}}">
                                        <img class="contato-img">
                                    </a>
                                </button>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li> --}}
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> --}}
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
                @yield('test')
                
            </nav>
        </header>
        
        {{-- @yield('test') --}}
                {{-- </div> --}}
        <main class="{{--py-3 bg-white--}}">
            @yield('content')
        </main>
        <footer class="">
            <div class="container col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 0px;">
                <div class=img-footer alt="Responsive image" >  
                    <div class="row">
                        <div class="logoFooter text-center col-12">
                            <a href="{{route('home')}}">
                                <img src="{{url('img/logo/ex3.1.jpg')}}" alt="logotipo" class="logoFooter">
                            </a>
                            <a href="https://www.facebook.com/desafieconquiste/" class="social"><i class="fab fa-facebook-square botaoFacebook"></i></a>
                            <a href="https://www.instagram.com/" class="social"><i class="fab fa-instagram botaoInstagram"></i></a>
                            <a href="https://twitter.com/" class="social"><i class="fab fa-twitter botaoTwitter"></i></a>
                            <a href="https://br.pinterest.com/" class="social"><i class="fab fa-pinterest-square botaoPinterest"></i></i></a>
                            <div class="text-center m-auto">&copy; <?php echo "Copyrights 2018. Desafie & Conquiste 2018 All Rights Reserved.";?></div>
                        </div>
                    </div> 
                </div>         
            </div>
        </footer>
    </div>
</body>
</html>
