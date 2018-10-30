<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Projeto -->
        <meta name="description" content="Projeto Cred">


        <!-- Bootstrap Projetoe-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="{{url('css/app.css')}}"> --}}
        <link rel="stylesheet" href="{{url('css/estilo.css')}}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        
        {{-- <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles Projeto -->
        --}}
    
    </head>
    <body>
        <div class="container col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 0px;">
            <div id="app">
                <header id="top" class="headerMenu container-fluid main-header">
                    {{-- <div class=img-fluid2 alt="Responsive image" >    --}}
                    <nav class="navbar col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12  ">
                        <div class="logo col-12  col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <img src="{{url('img/logo/ex3tr')}}.png" width="190" style="
                            margin-left: 10px; height: 100px;">
                        </div>
                        
                        {{-- <nav class="menuPrincipal navbar navbar-expand-md col-sm-12 col-md-7 col-lg-7">
                                <div class="container">
                                        <button class="hambMenu navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                                <img src="{{url('img/logo/hamburguer2')}}.png" alt="logotipo" class="hamburguer">
                                            </button>
                                    </div>
                                </nav> --}}
                        {{-- <div class="botoesMenu col-sm-12 col-md-1 col-lg-1"> --}}
                            {{-- <ul class="nav navbar-nav main-navbar"> --}}
                                {{-- <li>
                                    <a class="textHeader" href="#about">Saiba mais</a>
                                    <a class="textHeader" href="#history">Nossa História</a>
                                    <a class="textHeader" href="#business">Modelo de Negócio</a>
                                    <select style="
                                            background-color: transparent;
                                            outline-color: transparent;
                                            border-color: transparent;
                                        ">
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="opel">Opel</option>
                                            <option value="audi">Audi</option>
                                          </select>
                                    <a class="textHeader" href="#photos">Fotos e Fatos</a>
                                </li> --}}
                               
                                
                            
                        {{-- </div>  --}}

                        <div class="col">
                            2 of 3
                          </div>
                        
                        
                        <div class="botoesMenu  col-sm-12 col-md-3 col-lg-3">
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
                            {{-- código para icone perguntas se necessário<input  class="duvida-img" href="{{route('perguntas')}}">     --}}
                            <button class="btn btn-default" type="button";>
                                <a href="{{route('contato')}}">
                                    <img class="contato-img">
                                </a>
                            </button>
                           {{-- Botão para outra opção --}}
                            <a href="{{route('register')}}">
                                <input href="{{route('register')}}"class="btnVender btn-primary" type="reset" value="Cadastrar">
                                <img class="contato-img">
                            </a>
                        </div>
                        <div class="container-fluid">

                                <nav class="navbar navbar-expand-md col-sm-12 col-md-12 col-lg-12" style="
                                top: 89px;
                                padding-top: 2px;
                                padding-bottom: 2px;
                                bottom: 602px;
                                padding-left: 659px;
                            ">
                                    
                                            <button class="hambMenu navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                                <img src="{{url('img/logo/hamburguer2')}}.png" alt="logotipo" class="hamburguer">
                                            </button>
                                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                    <!-- Left Side Of Navbar -->
                                                    <ul class="navbar-nav ">
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
                            
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>   
             
                        
                        <button class="hambMenu navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <img src="{{url('img/home_tr2')}}.png" alt="logotipo" class="hamburguer">
                        </button> --}}
                        
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="#about">Saiba mais?</a>
                            <a href="#history">Nossa História?</a>
                            <a href="#business">Modelo de Negócio</a>
                            <a href="#witness">Testemunhos</a>
                            <a href="#why">Por que sim ou não?</a>
                            <a href="#world">Notícias</a>
                            <a href="#photos">Fotos e Fatos</a>
                            <a href="http://localhost:8000/contato">Entrar em Contato</a>
                        </div>
                        <span style="font-size:35px;cursor:pointer" onclick="openNav()">&#9776;</span>
                        <script>
                            let body = document.querySelector('body')
                            // window.onload
                            function openNav() {
                                console.log('bla');
                                document.getElementById("mySidenav").style.width = "250px";
                            }
                            
                            function closeNav() {
                                document.getElementById("mySidenav").style.width = "0";
                            }
                        </script>
                    </nav>
                    



                   
                </header>

                   @yield('test')
                {{-- </div> --}}
                <main class="">
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
         </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>
            <!-- Javascripts Projeto -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="{{url("js/teste.js")}}">
            
            </script>
    </body>

</html>
