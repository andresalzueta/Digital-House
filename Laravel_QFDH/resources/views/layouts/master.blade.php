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
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/estilo.css')}}">

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
            background-color:#f8f9fawite;
        }
    </style>
  
</head>
<body>
    <div id="app">
        <header id="top" class="headerMenu container-fluid main-header">
            <nav class="linhaMenu row">
                <div class="logo col-12 col-sm-12 col-md-2 col-lg-2">
                    <a href="{{route('home')}}">
                    <img src="{{url('img/logo/logo-Cop')}}ia.png" alt="logotipo" class="logo">
                    </a>
                </div>               
                <div class="todoSearch col-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="row">
                        <div class="col-2 col-sm-1 col-md-2 col-lg-1">
                            <button class="btn-ps btn-default" type="button"></button>
                        </div>
                        <div class="col-10 col-sm-11 col-md-10 col-lg-10">
                            <input type="text" name="searchData" class="form-control" placeholder="Search for...">
                        </div>
                    </div>
                </div>
                {{-- <div class="logo col-4 col-sm-4 col-md-2 col-lg-12">
                    <img src="{{url('img/logo/logo1.pn')}}g" alt="logotipo" class="logo">
                </div> --}}
                <div class="botoesMenu col-12 col-sm-12 col-md-5 col-lg-5">
                    <button class="btn btn-default" type="button";>
                        <a href="{{route('home')}}">
                            <img class="home-img">
                        </a>
                    </button>
                    <button class="btn btn-default" type="button";>
                        <a href="{{route('perguntas')}}">
                            <img class="duvida-img">
                        </a>
                    </button>
                    <button class="btn btn-default" type="button";>
                        <a href="{{route('login')}}">
                            <img class="entrar-img">
                        </a>
                    </button>
                    <a href="{{route('register')}}">
                        <input href="{{route('register')}}"class="btnVender btn-primary" type="reset" value="Cadastrar">
                    </a>
                </div> 
            </nav>

            
            {{-- <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-laravel col-sm-12 col-md-12 col-lg-12"> --}}
             <nav class="menuPrincipal navbar navbar-expand-md col-sm-12 col-md-12 col-lg-12"
                <div class="container">
                    {{-- <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a> --}}
                    <button class="hambMenu navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <img src="{{url('img/logo/hamburgu')}}er2.png" alt="logotipo" class="hamburguer">
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
  
                            <!-- Authentication Links -->
                            @guest
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
            </nav>
        </header>
        

        <main class="py-3 bg-white">
            @yield('content')
        </main> 
        <footer class="footer">
            <hr>
            <div class="container">
                <div class="row">
                    <div class="logoFooter col-sm-3">
                        <a href="{{route('home')}}">
                            <img src="{{url('img/logo/logo.png')}}" alt="logotipo" class="logoFooter">
                        </a>
                        <!-- <h4 class="title">Sumi</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p> -->
                        <ul class="social-icon">
                            <a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook-square botaoFacebook"></i></a>
                            <a href="https://www.instagram.com/" class="social"><i class="fab fa-instagram botaoInstagram"></i></a>
                            <a href="https://twitter.com/" class="social"><i class="fab fa-twitter botaoTwitter"></i></a>
                            <a href="https://br.pinterest.com/" class="social"><i class="fab fa-pinterest-square botaoPinterest"></i></i></a>
                        </ul>
                    </div>
                    <div class="minhaContaFooter col-sm-3">
                        <h4 class="minhaContaFooter">Minha Conta</h4>
                        <span class="acount-icon">
                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> lista de Desejos</a>
                            <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Carrinho</a>
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a>
                            <a href="#"><i class="fa fa-globe" aria-hidden="true"></i> Outros</a>
                        </span>
                    </div>
                    <div class="footerCategorias col-sm-3">
                        <h4 class="footerCategorias">Categorias</h4>
                        <div class="category">
                            <a href="http://localhost:8000/products_bycategory/4">Acessórios</a>
                            <a href="http://localhost:8000/products_bycategory/2">Bolsas</a>
                            <a href="http://localhost:8000/products_bycategory/3">Calças</a>
                            <a href="http://localhost:8000/products_bycategory/1">Jaquetas</a>
                            <a href="http://localhost:8000/products_bycategory/8">Kids</a>
                            <a href="http://localhost:8000/products_bycategory/6">Óculos</a>
                            <a href="http://localhost:8000/products_bycategory/7">Roupa Social</a>
                        </div>
                    </div>
                    <div class="footerPagto col-sm-3">
                        <h4 class="footerPagto">Métodos de Pagamento</h4>
                        <p>xxxxxxxxxxxxxxxx.</p>
                        <ul class="payment">
                            <li><a href="#"><i class="fa fa-cc-amex" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-paypal" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                {{-- <div class="row text-center"> © 2017. Made with  by Quarteto Fantástico.</div> --}}
                <div class="text-center m-auto">&copy; <?php echo " © 2017. Made with  by Quarteto Fantástico. - " .date('Y'); ?></div>
            </div>
            {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> --}}
        </footer>
    </div>
</body>

</html>
