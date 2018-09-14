@extends('layouts.master')

@section('content')


<div class="bug bodyCont container-fluid" style="padding:0;">
    <div class="bannerCarrossel container-fluid" style="padding:0;">
        <!-- banner destaque -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/destaqueHome.jpg" alt="slide1" style="height: 368px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/destaqueHome4.png" alt="slide2" style="height: 368px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/destaqueHome2.jpg" alt="slide3" style="height: 368px;">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/destaqueHome3.jpg" alt="slide4" style="height: 368px;">
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
    <br>
    <div class="bug container-fluid">
        <nav class="navbarVeja row">
            <div class="c-widget__header col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p class="font-weight-light">Variedades</p>
            </div>
            <div class="botaoVejaMais col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6"> 
                <button type="button" class="vejaBtn"><p class="textoBotao">Veja mais</p></button>
            </div>
        </nav>        
    </div>      
    <div class="bug variados1Anuncios container-fluid">
        <nav class="linhaVariados1Anuncios row">
            <div class="cont-prod col-12 col-sm-12 col-md-12 col-lg-12">
                <section class="vip-products row">
                    <article  class="product col-6  col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <img src="img/Produtos/Ela/Jaqueta.jpg" class="sizeImg" alt="pdto 01">
                        <!-- <h2>Produto 01</h2> -->
                        <p>Jaquetas</p>
                        <a href="#">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <img src="img/Produtos/Ela/oculos.jpg" class="sizeImg" alt="pdto 02">
                        <!-- <h2>Produto 02</h2> -->
                        <p>Óculos</p>
                        <a href="#">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <!-- col-lg-2 = 992px -->
                        <img src="img/Produtos/Ela/Blazer.jpg" class="sizeImg" alt="pdto 03">
                        <!-- <h2>Produto 03</h2> -->
                        <p>Social</p>
                        <a href="#">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <img src="img/Produtos/Ela/Jeans.jpg" class="sizeImg"  alt="pdto 04">
                        <!-- <h2>Produto 04</h2> -->
                        <p>Calça Jeans</p>
                        <a href="#">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <img src="img/Produtos/Ela/Sapato.jpg" class="sizeImg"  alt="pdto 05">
                        <!-- <h2>Produto 05</h2> -->
                        <p>Sapatos</p>
                        <a href="#">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <img src="img/Produtos/Ela/Bolsa.jpg" class="sizeImg"  alt="pdto 05">
                        <!-- <h2>Produto 05</h2> -->
                        <p>Bolsas</p>
                        <a href="#">ver mais</a>
                    </article>
                </section>
            </div>
        </nav>
    </div>
    <div class="bug container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                <hr class="Separador">
                </div>
            </div>
        </div>
    </div>
    <div class="bug container-fluid">
        <nav class="navbarVeja row">
            <div class="c-widget__header col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p class="font-weight-light">Kids</p>
            </div>
            <div class="botaoVejaMais col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6"> 
                <button type="button" class="vejaBtn"><p class="textoBotao">Veja mais</p></button>
            </div>
        </nav>        
    </div> 
    <div class="bug variados1Anuncios container">
        <nav class="linhaVariados1Anuncios row">
            <div class="cont-prod col-12 col-sm-12 col-md-12 col-lg-12">
                <section class="vip-products row">
                    <article  class="product col-6  col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <img src="img/Produtos/Ela-Kids/blusa-gap.jpg" class="sizeImg" alt="pdto 01">
                        <!-- <h2>Produto 01</h2> -->
                        <p>Jaquetas</p>
                        <a href="#">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <img src="img/Produtos/Ela-Kids/calca1.jpg" class="sizeImg" alt="pdto 02">
                        <!-- <h2>Produto 02</h2> -->
                        <p>Óculos</p>
                        <a href="#">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <!-- col-lg-2 = 992px -->
                        <img src="img/Produtos/Ela-Kids/calca2.jpg" class="sizeImg" alt="pdto 03">
                        <!-- <h2>Produto 03</h2> -->
                        <p>Social</p>
                        <a href="#">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <img src="img/Produtos/Ela-Kids/calca4.jpg" class="sizeImg"  alt="pdto 04">
                        <!-- <h2>Produto 04</h2> -->
                        <p>Calça Jeans</p>
                        <a href="#">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <img src="img/Produtos/Ela-Kids/tenis-polo.jpg" class="sizeImg"  alt="pdto 05">
                        <!-- <h2>Produto 05</h2> -->
                        <p>Sapatos</p>
                        <a href="#">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <img src="img/Produtos/Ela-Kids/shorts-destroyer.jpg" class="sizeImg"  alt="pdto 05">
                        <!-- <h2>Produto 05</h2> -->
                        <p>Bolsas</p>
                        <a href="#">ver mais</a>
                    </article>
                </section>
            </div>
        </nav>
    </div> 
    <div class="bug container-fluid">
        <nav class="prop row">
            <div class="c-widget__header col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p class="font-weight-light">Um Mundo de Oportunidades</p>
            </div>
        </nav>        
    </div>   
    <div class="bug container-fluid" style="padding:0;" >
        <nav >
            <a >
                <img src="img/bannerFooter2.jpg" class="img-fluid" alt="Responsive image">
            </a>
        </nav>
    </div>
    <div class="bug container-fluid">
        <nav class="prop row">
            <div class="c-widget__header col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p class="font-weight-light">Quais suas marcas preferidas?</p>
            </div>
        </nav>        
    </div> 
    <div class="bug container">
        <div class="cont-marcas">
            <section class="vip-marcas row">
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="#" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/adidas.jpg" alt="adidas">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="#" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/Chanel.jpg" alt="Chanel">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="#" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/asics.jpg" alt="asics">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="#" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/Giorgio-Armani.jpg" alt="Giogio Armani">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="#" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/colcci.jpg" alt="colcci">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="#" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/fossil.jpg" alt="fossil">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="#" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/guess.jpg" alt="guess">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="#" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/Louis-Vuitton-Logo.jpg" alt="Louis Vuitton">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="#" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/Vlatore.jpg" alt="Vlatore">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="#" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/nike.jpg" alt="nike">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="#" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/mormaii.jpg" alt="mormaii">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="#" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/Gucci.jpg" alt="Gucci">
                    </a>
                </article>
            </section>
       </div>
    </div>
    <div class="bug container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                <hr class="Separador">
                </div>
            </div>
        </div>
    </div>
    <div class="bug container-fluid">
        <nav class="navbarVeja row">
            <div class="c-widget__header col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p class="font-weight-light">Promoções</p>
            </div>
            <div class="botaoVejaMais col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6"> 
                <button type="button" class="vejaBtn"><p class="textoBotao">Veja mais</p></button>
            </div>
        </nav>        
    </div> 
    <div class="bug container-fluid">
        <div class="cont-prod">
            <section class="vip-products row">
                <article  class="product  col-sm-3 col-md-3 col-lg-3">
                    <img src="img/Produtos/Promocoes/blazer.jpg" class="sizeImgPromo" alt="pdto 01">
                    <img src="img/Produtos/Promocoes/jaqueta.jpg" class="sizeImgPromo" alt="pdto 01">
                    <!-- <h2>Produto 01</h2> -->
                    <a class="textPromo"href="#">-30%</a>
                    <p>Expira em 2 dias</p>
                </article>
                <article class="product col-sm-3 col-md-3 col-lg-3">
                    <img src="img/Produtos/Promocoes/bolsa.jpg" class="sizeImgPromo" alt="pdto 02">
                    <img src="img/Produtos/Promocoes/bolsa-louis-vuitton.jpg" class="sizeImgPromo" alt="pdto 02">
                    <!-- <h2>Produto 02</h2> -->
                    <a class="textPromo"href="#">-25%</a>
                    <p>Expira em 10 dias</p>
                </article>
                <article class="product nomargin  col-sm-3 col-md-3 col-lg-3">
                    <img src="img/Produtos/Promocoes/chinelo-colcci.jpg" class="sizeImgPromo" alt="pdto 03">
                     <img src="img/Produtos/Promocoes/tamanco_colcci.jpg" class="sizeImgPromo" alt="pdto 03">
                    <!-- <h2>Produto 03</h2> -->
                    <a class="textPromo"href="#">-15%</a>
                    <p>Expira em 5 dias</p>
                </article>
                <article class="product col-sm-3 col-md-3 col-lg-3">
                    <img src="img/Produtos/Promocoes/diesel-pulseira.jpg" class="sizeImgPromo"  alt="pdto 04">
                    <img src="img/Produtos/Promocoes/diesel-pulseira2.jpg" class="sizeImgPromo"  alt="pdto 04">
                    <!-- <h2>Produto 04</h2> -->
                    <a class="textPromo"href="#">-10%</a>
                    <p>Expira em 3 dias</p>
                </article>
            </section>
        </div>
    </div>   
    <div class="bug container-fluid" style="padding:0;" >
        <nav >
            <a >
                <img src="img/Produtos/Promocoes/banner-promocao.png" class="img-fluid" alt="Responsive image">
            </a>
        </nav>
    </div>
    <div class="bug separadorFooter container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                <hr class="Separador">
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



</div>{{--  div Container Fim --}}

               
            
        
    

@endsection
