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
                    <a href="http://localhost:8000/products_bycategory/3">
                    <img class="d-block w-100" src="img/destaqueHome3.jpg" alt="slide4" style="height: 368px;">
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
    <br>
    <div class="bug container-fluid">
        <nav class="navbarVeja row">
            <div class="c-widget__header col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <p class="font-weight-light">Variedades</p>
            </div>
            <div class="botaoVejaMais col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6"> 
                <a href="http://localhost:8000/categories_pages">
                    <input href="http://localhost:8000/categories_pages"class="vejaBtn btn-primary" type="reset" value="Veja Mais">
                </a>
            </div>
        </nav>        
    </div>      
    <div class="bug variados1Anuncios container-fluid">
        <nav class="linhaVariados1Anuncios row">
            <div class="cont-prod col-12 col-sm-12 col-md-12 col-lg-12">
                <section class="vip-products row">
                    <article  class="product col-6  col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <a class="imgLink" href="http://localhost:8000/products_bycategory/1">
                            <img src="img/Produtos/Ela/Jaqueta.jpg" class="sizeImg" alt="pdto 01">
                            <!-- <h2>Produto 01</h2> -->
                        </a>    
                        <p>Jaquetas</p>
                        <a href="http://localhost:8000/products_bycategory/1">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <a class="imgLink" href="http://localhost:8000/products_bycategory/6">
                            <img src="img/Produtos/Ela/oculos.jpg" class="sizeImg" alt="pdto 02">
                            <!-- <h2>Produto 02</h2> -->
                        </a> 
                        <p>Óculos</p>
                        <a href="http://localhost:8000/products_bycategory/6">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <a class="imgLink" href="http://localhost:8000/products_bycategory/7">
                            <img src="img/Produtos/Ela/Blazer.jpg" class="sizeImg" alt="pdto 03">
                            <!-- <h2>Produto 03</h2> -->
                        </a>   
                        <p>Social</p>
                        <a href="http://localhost:8000/products_bycategory/7">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <a class="imgLink" href="http://localhost:8000/products_bycategory/3">
                            <img src="img/Produtos/Ela/Jeans.jpg" class="sizeImg"  alt="pdto 04">
                            <!-- <h2>Produto 04</h2> -->
                        </a>
                        <p>Calça Jeans</p>
                        <a href="http://localhost:8000/products_bycategory/3">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <a class="imgLink" href="http://localhost:8000/products_bycategory/5">
                            <img src="img/Produtos/Ela/Sapato.jpg" class="sizeImg"  alt="pdto 05">
                            <!-- <h2>Produto 05</h2> -->
                        </a>
                        <p>Sapatos</p>
                        <a href="http://localhost:8000/products_bycategory/5">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <a class="imgLink" href="http://localhost:8000/products_bycategory/2">  
                            <img src="img/Produtos/Ela/Bolsa.jpg" class="sizeImg"  alt="pdto 05">
                            </a>
                            <!-- <h2>Produto 06</h2> -->
                            <p>Bolsas</p>
                        <a href="http://localhost:8000/products_bycategory/2">ver mais</a>
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
                <p class="font-weight-light">Destaques Kids</p>
            </div>
            <div class="botaoVejaMais col-6  col-xs-6 col-sm-6 col-md-6 col-lg-6"> 
                <a href="http://localhost:8000/categories_pages">
                    <input href="http://localhost:8000/categories_pages"class="vejaBtn btn-primary" type="reset" value="Veja Mais">
                </a>
            </div>    
        </nav>        
    </div> 
    <div class="bug variados1Anuncios container">
        <nav class="linhaVariados1Anuncios row">
            <div class="cont-prod col-12 col-sm-12 col-md-12 col-lg-12">
                <section class="vip-products row">
                    <article  class="product col-6  col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <a class="imgLink" href="http://localhost:8000/product/show/42"> 
                            <img src="img/Produtos/Ela-Kids/blusa-gap.jpg" class="sizeImg" alt="pdto 01">
                            <!-- <h2>Produto 01</h2> -->
                        </a>
                        <p>Jaquetas</p>
                        <a href="http://localhost:8000/product/show/42">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <a class="imgLink" href="http://localhost:8000/product/show/48"> 
                            <img src="img/Produtos/Ela-Kids/calca1.jpg" class="sizeImg" alt="pdto 02">
                            <!-- <h2>Produto 02</h2> -->
                        </a>
                        <p>Calça Jeans</p>
                        <a href="http://localhost:8000/product/show/48">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <a class="imgLink" href="http://localhost:8000/product/show/47"> 
                            <img src="img/Produtos/Ela-Kids/calca2.jpg" class="sizeImg" alt="pdto 03">
                            <!-- <h2>Produto 03</h2> -->
                        </a>
                        <p>Calça Jeans</p>
                        <a href="http://localhost:8000/product/show/47">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <a class="imgLink" href="http://localhost:8000/product/show/43"> 
                            <img src="img/Produtos/Ela-Kids/calca4.jpg" class="sizeImg"  alt="pdto 04">
                            <!-- <h2>Produto 04</h2> -->
                        </a>
                        <p>Calça Jeans</p>
                        <a href="http://localhost:8000/product/show/43">ver mais</a>   
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <a class="imgLink" href="http://localhost:8000/product/show/46">
                            <img src="img/Produtos/Ela-Kids/tenis-polo.jpg" class="sizeImg"  alt="pdto 05">
                            <!-- <h2>Produto 05</h2> -->
                        </a>
                        <p>Sapatos</p>
                        <a href="http://localhost:8000/product/show/46">ver mais</a>
                    </article>
                    <article class="product col-6 col-xs-5 col-sm-2 col-md-2 col-lg-2">
                        <a class="imgLink" href="http://localhost:8000/product/show/45">
                            <img src="img/Produtos/Ela-Kids/shorts-destroyer.jpg" class="sizeImg"  alt="pdto 05">
                            <!-- <h2>Produto 05</h2> -->
                        </a>
                        <p>Bolsas</p>
                        <a href="http://localhost:8000/product/show/45">ver mais</a>
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
            <a href="http://localhost:8000/products_bycategory/2" >
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
                    <a href="http://localhost:8000/products_bybrand/2" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/adidas.jpg" alt="adidas">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="http://localhost:8000/products_bybrand/4" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/Chanel.jpg" alt="Chanel">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="http://localhost:8000/products_bybrand/3" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/asics.jpg" alt="asics">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="http://localhost:8000/products_bybrand/8" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/Giorgio-Armani.jpg" alt="Giogio Armani">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="http://localhost:8000/products_bybrand/5" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/colcci.jpg" alt="colcci">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="http://localhost:8000/products_bybrand/7" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/fossil.jpg" alt="fossil">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="http://localhost:8000/products_bybrand/10" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/guess.jpg" alt="guess">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="http://localhost:8000/products_bybrand/11" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/Louis-Vuitton-Logo.jpg" alt="Louis Vuitton">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="http://localhost:8000/products_bybrand/17" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/michael-kors.png" alt="michael-kors">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="http://localhost:8000/products_bybrand/13" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/nike.jpg" alt="nike">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="http://localhost:8000/products_bybrand/12" class="shadow bottom" >
                        <img class="sizeMarcas" src="img/Produtos/Marcas/mormaii.jpg" alt="mormaii">
                    </a>
                </article>
                <article  class="marcas col-6 col-sm-6 col-md-4 col-lg-2">
                    <a href="http://localhost:8000/products_bybrand/5" class="shadow bottom" >
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
                <a href="http://localhost:8000/products_bycategory/9">
                    <input href="http://localhost:8000/products_bycategory/9"class="vejaBtn btn-primary" type="reset" value="Veja Mais">
                </a>
            </div>   
        </nav>        
    </div> 
    <div class="bug container-fluid">
        <div class="cont-prod">
            <section class="vip-products row">
                <article  class="product  col-sm-3 col-md-3 col-lg-3">
                    <img src="img/Produtos/Promocoes/jaqueta-colcci.jpg" class="sizeImgPromo" alt="pdto 01">
                    <img src="img/Produtos/Promocoes/jaqueta-nike.jpg" class="sizeImgPromo" alt="pdto 01">
                    <!-- <h2>Produto 01</h2> -->
                    <a class="textPromo"href="http://localhost:8000/products_bycategory/9">-30%</a>
                    <p>Expira em 2 dias</p>
                </article>
                <article class="product col-sm-3 col-md-3 col-lg-3">
                    <img src="img/Produtos/Promocoes/Bolsa-Guess.jpg" class="sizeImgPromo" alt="pdto 02">
                    <img src="img/Produtos/Promocoes/bolsa-louis-vuitton.jpg" class="sizeImgPromo" alt="pdto 02">
                    <!-- <h2>Produto 02</h2> -->
                    <a class="textPromo"href="http://localhost:8000/products_bycategory/9">-25%</a>
                    <p>Expira em 10 dias</p>
                </article>
                <article class="product nomargin  col-sm-3 col-md-3 col-lg-3">
                    <img src="img/Produtos/Promocoes/chinelo-colcci.jpg" class="sizeImgPromo" alt="pdto 03">
                     <img src="img/Produtos/Promocoes/tamanco_colcci.jpg" class="sizeImgPromo" alt="pdto 03">
                    <!-- <h2>Produto 03</h2> -->
                    <a class="textPromo"href="http://localhost:8000/products_bycategory/9">-15%</a>
                    <p>Expira em 5 dias</p>
                </article>
                <article class="product col-sm-3 col-md-3 col-lg-3">
                    <img src="img/Produtos/Promocoes/diesel-pulseira.jpg" class="sizeImgPromo"  alt="pdto 04">
                    <img src="img/Produtos/Promocoes/diesel-pulseira2.jpg" class="sizeImgPromo"  alt="pdto 04">
                    <!-- <h2>Produto 04</h2> -->
                    <a class="textPromo"href="http://localhost:8000/products_bycategory/9">-10%</a>
                    <p>Expira em 3 dias</p>
                </article>
            </section>
        </div>
    </div>   
    <div class="bug container-fluid" style="padding:0;" >
        <nav >
            <a href="http://localhost:8000/products_bycategory/2" >
                <img src="img/Produtos/Promocoes/banner-promocao.png" class="img-fluid" alt="Responsive image">
            </a>
        </nav>
    </div>
 


</div>{{--  div Container Fim --}}

               
            
        
    

@endsection
