<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cred</title>
     <!-- Bootstrap Projetoe-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
     <link rel="stylesheet" href="{{url('css/estilo.css')}}">
    

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/6AB23909-C3B4-E541-87E0-FD876F8D39A8/main.js" charset="UTF-8"></script></head>

  <body>

        <nav class="navbar navbar-light amber lighten-4 mb-4">

                <div class="logo">
                        <img src="{{url('img/logo/credlogo1')}}.jpg" width="150">
                    </div>
            
                    <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="#">About</a>
                            <a href="#">Services</a>
                            <a href="#">Clients</a>
                            <a href="#">Contact</a>
                          </div>
                          <span style="font-size:35px;cursor:pointer" onclick="openNav()">&#9776;</span>
                          <script>
                                function openNav() {
                                    document.getElementById("mySidenav").style.width = "250px";
                                }
                                
                                function closeNav() {
                                    document.getElementById("mySidenav").style.width = "0";
                                }
                                </script>
            
            </nav>
            <!--/.Navbar-->
            {{-- <div id="app">
                <header role="banner" class="main-header" data-header="">
                    <div class="container-no-offset">
                        <div class="nav-wrapper-outer"> 
                            <div class="logo">
                                <img src="{{url('img/logo/credlogo1')}}.jpg" alt="">
                            </div>
                            <button class="menu-toggle clearfix" data-toggle-menu>
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                    
        
                    </div>
        
                </header>
            </div> Fim do Body --}}
        </body>

        </html>