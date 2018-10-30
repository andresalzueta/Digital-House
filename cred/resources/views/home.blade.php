@extends('layouts.master')




<div class="bodyCont container-fluid" style="padding:0;">

    {{-- <section id="about">
        <div class="container-fluid" style="padding:0">
            <div class=img-fluid2 alt="Responsive image" >
                <div class="container-fluid">
                    <nav class="navbarVeja row">
                        <div class="banner1 col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6"> --}}
                                
                                    {{-- <embed class="video1" src="img/banners/videoEx.mp4"> --}}
                        {{-- </div>
                        <div class="text-center col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <h1 class="titles">O que buscamos?</h1>
                            <div class="row col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p class="lead" >Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                                    e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja 
                                    de tipos e os embaralhou para fazer um livro de modelos de tipos.  
                                </p>
                            </div>
                        </div> 
                    </nav>
                </div>  
            </div> 
        </div>
    </section> --}}


    {{-- <section id="introduction">
            <div class="container-fluid">
                <nav class="navbarVeja row">
                    <div class="banner1 col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <p class="text-center"> --}}
                        {{-- <p class="lead">"Campo para video ou imagem."</p>  --}}
                        {{-- <embed class="video1" src="img/banners/videoEx.mp4"> --}}
                        {{-- <img text-center src="{{url('img/banners/ex2')}}.jpeg" width="150"> --}}
                        {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/EDQ1dmFEGiI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> --}}
                        {{-- </p>
                    </div>
                    <div class="banner1 col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <h1 class="titles">Introdução</h1>
                        <div class="row col-8  col-xs-8 col-sm-8 col-md-12 col-lg-12">
                            <p class="lead" text-center >Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                                e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja 
                                de tipos e os embaralhou para fazer um livro de modelos de tipos.  
                            </p>
                        </div>  
                    </div> 
                </nav>        
            </div>
    </section>   --}}
    @section('test')
   
    <section class="" alt="Responsive image" id="about">
        <div class="img-fluid2">
                    <nav class="navbarVeja row">
                        <div class="banner1 col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                
                                    {{-- <embed class="video1" src="img/banners/videoEx.mp4"> --}}
                        </div>
                        <div class="textIntro text-center col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <h1 class="titles">Introdução</h1>
                            <div class="row col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p class="lead" >Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                                    e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja 
                                    de tipos e os embaralhou para fazer um livro de modelos de tipos.  
                                </p>
                            </div>
                        </div> 
                    </nav>
                </div>  
        </div>
    </section>
    @endsection
    @section('content')
    <section id="about">
        <div class="container-fluid" style="padding:0">
            <div class=img-fluid1 alt="Responsive image" >
                <div class="container-fluid">
                    <nav class="navbarVeja row">
                        <div class="titleAbout text-center col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <h1 class="titles">O que buscamos?</h1>
                            <div class="row col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p class="lead" >Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                                    e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja 
                                    de tipos e os embaralhou para fazer um livro de modelos de tipos.  
                                </p>
                            </div>
                        </div> 
                    </nav>
                    <nav class="navbarVeja row">
                        <div class="text-center col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        </div>
                        <div class="text-center col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <h1 class="titles">Como mudou minha Vida?</h1>
                            <div class="row col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p class="lead" >Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                                        e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja 
                                        de tipos e os embaralhou para fazer um livro de modelos de tipos. 
                                </p>
                            </div>
                        </div> 
                    </nav> 
                </div>  
            </div> 
        </div>
    </section>
    <hr class="Separador">
    <section id="history">
        <div class="boxHistory container-fluid">
            <div class="navbarVeja row">
                <div class="mainTitles2 col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                    <p class="titles" text-center >History<p>
                </div>  
            </div>
            <div class="well" style="background-color: #f1f2f4;
                border: 1px solid transparent; padding-top: 83px;
                height: 250px;
                margin-right: 50px;
                margin-left: 50px;"> 
                <nav class="navbarVeja row">
                    <div class="ourHistory col-4  col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <img src="img/userIcon.png" class="sizeImg"  data-aos="slide-right" alt="pdto 05">     
                    </div>
                <div class="ourHistory col-8  col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    {{-- <h1 class="titles2">O que Perguntar  ?</h1> --}}
                    <div class="rowtextsHistoryRight row col-8  col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <p class="textsHistoryRight lead" >Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                            e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja 
                            de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não 
                            só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente 
                            inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens 
                            de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica 
                            como Aldus PageMaker. 
                        </p>
                    </div>  
                </div>
            </nav>
            </div> 
            <br>
            <div class="well" style="background-color: #f1f2f4;
            border: 1px solid transparent; padding-top: 83px;
    height: 250px;
    margin-right: 50px;
    margin-left: 50px;"> 
            <nav class="navbarVeja row">
                <div class="ourHistory col-8  col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    {{-- <h1 class="titles2">O que Perguntar  ?</h1> --}}
                    <div class="rowtextsHistoryLeft row col-8  col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <p class="textsHistoryLeft lead" >Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                            e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja 
                            de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não 
                            só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente 
                            inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens 
                            de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica 
                            como Aldus PageMaker. 
                        </p>
                    </div>  
                </div>
                <div class="ourHistory col-4  col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="img/userIcon.png" class="sizeImg"  alt="pdto 05">     
                </div>
            </nav>
            </div>         
        </div>  
    </section>
    <hr class="Separador">
    <section id="business">
        <div class="businessCont container-fluid">
            <div class="navbarVeja row">
                <div class="text-center col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="titles">Modelo de Negócio</h1>
                </div>
                <div class="row col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="lead text-center " >Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                        e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja 
                        de tipos e os embaralhou para fazer um livro de modelos de tipos.  
                    </p>
                </div>
                <div class="col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <video controls>
                        <source class="text-center" src="img/banners/videoEx3.mp4" type="video/mp4" width="445" height="250">
                    </video>   
                </div>
            </div>
        </div>
    </section>
    <hr class="Separador">
    <section id="witness">
        <div class="container-fluid" style="background-color: #f6f6f6;">
            <div class="navbarVeja row">
                    <div class="text-center col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1 class="titles">Testemunhos</h1>
                    </div>
                    <div class="container-fluid" style="padding:0;">
                        <div class="bannerCarrossel container-fluid" style="padding:0;">
                            <!-- banner destaque -->
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/Banners/expassos1.jpg" alt="slide1" style="height: 368px;">
                                    {{-- <div class="carousel-caption col-6 col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                                         <video controls>
                                            <source class="text-center" src="img/banners/videoEx3.mp4" type="video/mp4" width="200" height="150">
                                        </video>
                                    </div> --}}
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/Banners/expassos2.jpg" alt="slide2" style="height: 368px;">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/Banners/expassos3.jpg" alt="slide3" style="height: 368px;">
                                </div>
                                <div class="carousel-item">
                                    <a href="/">
                                    <img class="d-block w-100" src="img/Banners/expassos4.jpg" alt="slide4" style="height: 368px;">
                                    </a>
                                </div>
                            </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                        </div>  
                    </div>
                </div>
                <div class="text-center col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 id="why" class="titles">Por que sim e Não?</h1>
                    <p class="textWhy lead" >Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                        e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja 
                        de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não 
                        só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente 
                        inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens 
                        de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica 
                        como Aldus PageMaker. 
                    </p> 
                </div>
                <div class="container-fluid">
                        <nav class="navbarVeja row">
                            <div class="banner1 col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p class="text-center">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/gEHjgZ_z5Z4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/73X8gIxB-Gg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> --}}
                                </p>
                                <p class="text-center">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/uAYDG14JpPs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/cuuLqdaYh3w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> --}}
                                </p>
                                <p class="text-center">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/abhno9F8cyY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/i8-ep21AjHQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> --}}
                                </P>
                            </div>
                        </nav>        
                    </div>
            </div>
        </div>
    </section>

    <hr class="Separador">

    <section id="world">
        <div class="container-fluid" style="background-color: #f1f2f4;">
            <div class="navbarVeja row">
                <div class="text-center col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="titles">No Mundo</h1>
                </div>
                <div class="newsField text-center col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="textWorld lead" text-center >Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.
                    </p>
                    <img text-center src="{{url('img/Banners/News/news1')}}.jpg" width="150">
                </div>  
                <div class="text-center col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <a href="https://www.forbes.com">Lorem Ipsum é simplesmente uma simulaçã de texto</a>
                </div>
                <div class="text-center col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <a href="https://g1.globo.com/economia/">Lorem Ipsum é simplesmente uma simulaçã de texto</a>
                </div>
                <br>
                <div class="newsField text-center col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p class="textWorld lead" text-center >Lorem Ipsum é Expansão.
                        </p>
                        <img text-center src="{{url('img/Banners/News/news2')}}.jpg" width="150">
                    </div>  
                    <div class="text-center col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <a href="https://www.forbes.com">Lorem Ipsum é simplesmente uma simulaçã de texto</a>
                    </div>
                    <div class="text-center col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <a href="https://g1.globo.com/economia/">Lorem Ipsum é Expansão</a>
                    </div>    
            </div>    
        </div> 
        <hr class="Separador">
    </section>
    
    <hr class="Separador">

    <section id="photos">
        <div class="container-fluid" style="background-color: #f6f6f6;">
            <div class="sectionPhotos row">
                <div class="text-center col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="titles">Fotos e Fatos</h1>
                </div>
                <div class="container">
                    <div class="cont-marcas">
                        <section class="vip-marcas row">
                            <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                                <a href="/" class="marcasImg shadow bottom" >
                                    <img class="sizeMarcas" src="img/Banners/FotosFatos/ff1.jpg" alt="">
                                </a>
                            </article>
                            <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                                <a href="/" class="marcasImg shadow bottom" >
                                    <img class="sizeMarcas" src="img/Banners/FotosFatos/ff2.jpg" alt="">
                                </a>
                            </article>
                            <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                                <a href="/" class="marcasImg shadow bottom" >
                                    <img class="sizeMarcas" src="img/Banners/FotosFatos/ff3.jpg" alt="">
                                </a>
                            </article>
                            <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                                <a href="/" class="marcasImg shadow bottom" >
                                    <img class="sizeMarcas" src="img/Banners/FotosFatos/ff4.jpg" alt="">
                                </a>
                            </article>
                            <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                                <a href="/" class="marcasImg shadow bottom" >
                                    <img class="sizeMarcas" src="img/Banners/FotosFatos/ff5.jpg" alt="">
                                </a>
                            </article>
                            <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                                <a href="/" class="marcasImg shadow bottom" >
                                    <img class="sizeMarcas" src="img/Banners/FotosFatos/ff6.jpg" alt="">
                                </a>
                            </article>
                            <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                                <a href="/" class="marcasImg shadow bottom" >
                                    <img class="sizeMarcas" src="img/Banners/FotosFatos/ff7.jpg" alt="">
                                </a>
                            </article>
                            <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                                <a href="/" class="marcasImg shadow bottom" >
                                    <img class="sizeMarcas" src="img/Banners/FotosFatos/ff8.jpg" alt="">
                                </a>
                            </article>
                            <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                                <a href="/" class="marcasImg shadow bottom" >
                                    <img class="sizeMarcas" src="img/Banners/FotosFatos/ff9.jpg" alt="">
                                </a>
                            </article>
                            <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                                <a href="" class="marcasImg shadow bottom" >
                                    <img class="sizeMarcas" src="img/Banners/FotosFatos/ff10.jpg" alt="">
                                </a>
                            </article>
                            <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                                <a href="/" class="marcasImg shadow bottom" >
                                    <img class="sizeMarcas" src="img/Banners/FotosFatos/ff11.jpg" alt="">
                                </a>
                            </article>
                            <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                                <a href="/" class="marcasImg shadow bottom" >
                                    <img class="sizeMarcas" src="img/Banners/FotosFatos/ff12.jpg" alt="">
                                </a>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
 

</div>{{--  div Container Fim --}}

               
            
        
    

@endsection
