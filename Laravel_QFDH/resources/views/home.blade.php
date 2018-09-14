@extends('layouts.master')

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

    <div class="cont-prod row">
        <section class="vip-products row">
            <article class="product col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="img/Produtos/Ela/Jaqueta.jpg" class="sizeImg" alt="pdto 01" style="width:300px;height:300px;">
					<!-- <h2>Produto 01</h2> -->
					<h2>Jaquetas</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                    <a href="#">ver mais</a>
            </article>

            <article class="product col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="img/Produtos/Ela/Óculos.jpg" class="sizeImg" alt="pdto 01" style="width:300px;height:300px;">
                    
                    <h2>Óculos</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                    <a href="#">ver mais</a>
            </article>

            <article class="product col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="img/Produtos/Ela/Blazer.jpg" class="sizeImg" alt="pdto 01" style="width:300px;height:300px;">
                    <h2>Lorem ipsum amet</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                    <a href="#">ver mais</a>
            </article>

            <article class="product col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="images/img-pdto-1.jpg" alt="pdto 01">
                    <h2>Lorem ipsum amet</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                    <a href="#">ver mais</a>
            </article>

            <article class="product col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="images/img-pdto-2.jpg" alt="pdto 02">
                    <h2>Lorem ipsum amet</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                    <a href="#">ver mais</a>
            </article>

            <article class="product col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <img src="images/img-pdto-3.jpg" alt="pdto 03">
                    <h2>Lorem ipsum amet</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                    <a href="#">ver mais</a>
            </article>

        </section>
    </div>



</div>
@endsection
