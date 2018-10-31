@extends('layouts.masterweb')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="container-fluid" style="padding:0;">
        <!-- banner destaque -->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/destaqueHome.jpg" alt="First slide" style="height: 368px;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/destaqueHome2.jpg" alt="Second slide" style="height: 368px;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/destaqueHome3.jpg" alt="Third slide" style="height: 368px;">
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

    <div class="row">
        <div class="c-widget__header col-10">
            <h1 class="c-widget__title" >
                <p class="font-weight-light">Moda Ela</p>
            </h1>
        </div>
        <div class="col-2">
            
                <button type="button" class="vejaBtn"><p class="textoBotao">Veja mais</p></button>
            
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="c-widget__header col-6">
                    <h1 class="c-widget__title" >
                        <p class="font-weight-light">Moda Ela</p>
                    </h1>
                </div>
                <div class="col-6">
                    
                        <button type="button" class="vejaBtn"><p class="textoBotao">Veja mais</p></button>
                    
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>


        <div class="row justify-content-center">
                <div class="cont-prod">
                    <section class="vip-products row">
                        <article  class="product col-6  col-xs-5 col-sm-2 col-md-4 col-lg-2">
                            <img src="img/Produtos/Ela/Jaqueta.jpg" class="sizeImg" alt="pdto 01">
                            <!-- <h2>Produto 01</h2> -->
                            <p>Jaquetas</p>
                            <a href="#">ver mais</a>
                        </article>
                        <article class="product col-6 col-xs-5 col-sm-2 col-md-4 col-lg-2">
                            <img src="img/Produtos/Ela/Óculos.jpg" class="sizeImg" alt="pdto 02">
                            <!-- <h2>Produto 02</h2> -->
                            <p>Óculos</p>
                            <a href="#">ver mais</a>
                        </article>
                        <article class="product col-6 col-xs-5 col-sm-2 col-md-4 col-lg-2">
                            <!-- col-lg-2 = 992px -->
                            <img src="img/Produtos/Ela/Blazer.jpg" class="sizeImg" alt="pdto 03">
                            <!-- <h2>Produto 03</h2> -->
                            <p>Social</p>
                            <a href="#">ver mais</a>
                        </article>
                        <article class="product col-6 col-xs-5 col-sm-2 col-md-4 col-lg-2">
                            <img src="img/Produtos/Ela/Jeans.jpg" class="sizeImg"  alt="pdto 04">
                            <!-- <h2>Produto 04</h2> -->
                            <p>Calça Jeans</p>
                            <a href="#">ver mais</a>
                        </article>
                        <article class="product col-6 col-xs-5 col-sm-2 col-md-4 col-lg-2">
                            <img src="img/Produtos/Ela/Sapato.jpg" class="sizeImg"  alt="pdto 05">
                            <!-- <h2>Produto 05</h2> -->
                            <p>Sapatos</p>
                            <a href="#">ver mais</a>
                        </article>
                        <article class="product col-6 col-xs-5 col-sm-2 col-md-4 col-lg-2">
                            <img src="img/Produtos/Ela/Bolsa.jpg" class="sizeImg"  alt="pdto 05">
                            <!-- <h2>Produto 05</h2> -->
                            <p>Bolsas</p>
                            <a href="#">ver mais</a>
                        </article>
                    </section>
            </div>
        </div>

    </div>

</div>
@endsection
