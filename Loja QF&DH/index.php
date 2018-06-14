<!DOCTYPE html>
<html>
    <head>
        <?php
           include ("head.php");
        ?>
    </head>
    <body>
    <div class="container">
        <header>
             <?php
                 include ("header.php");
             ?>
        </header>
		<!-- banner destaque -->
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../img/destaqueHome.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../img/destaqueHome2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../img/destaqueHome3.jpg" alt="Third slide">
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
				<!-- <div class="banner">
					<img class="col 12" src="../img/destaqueHome.jpg" alt="banner">
				</div> -->
			</section>
            <br>
            <br>
			<!-- produtos -->
			<div class="cont-prod">
			<section class="vip-products row">
				<article  class="product col-12 col-sm-6 col-md-6 col-lg-4">
					<img src="#" alt="pdto 01">
					<h2>Produto 01</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
					<a href="#">ver mais</a>
				</article>
				<article class="product col-12 col-sm-6 col-md-6 col-lg-4">
					<img src="#" alt="pdto 02">
					<h2>Produto 02</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
					<a href="#">ver mais</a>
				</article>
				<article class="product nomargin col-12 col-sm-6 col-md-6 col-lg-4">
					<img src="#" alt="pdto 03">
					<h2>Produto 03</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
					<a href="#">ver mais</a>
				</article>
				<article class="product col-12 col-sm-6 col-md-6 col-lg-4">
					<img src="#" alt="pdto 04">
					<h2>Produto 04</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
					<a href="#">ver mais</a>
				</article>
				<article class="product col-12 col-sm-6 col-md-6 col-lg-4">
					<img src="#" alt="pdto 05">
					<h2>Produto 05</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
					<a href="#">ver mais</a>
				</article>
				<article class="product nomargin col-12 col-sm-6 col-md-6 col-lg-4">
					<img src="#" alt="pdto 06">
					<h2>Produto 06</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
					<a href="#">ver mais</a>
                </article>
                <article class="product nomargin col-12 col-sm-6 col-md-6 col-lg-4">
					<img src="#" alt="pdto 07">
					<h2>Produto 07</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                    <a href="#">ver mais</a>
                </article>
                <article class="product nomargin col-12 col-sm-6 col-md-6 col-lg-4">
					<img src="#" alt="pdto 08">
					<h2>Produto 08</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
                    <a href="#">ver mais</a>
                </article>
                <article class="product nomargin col-12 col-sm-6 col-md-6 col-lg-4">
					<img src="#" alt="pdto 09">
					<h2>Produto 09</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
					<a href="#">ver mais</a>
				</article>
			</section>
        </div>
    <br>
    <br>
            <?php
                 include ("footer.php");
             ?>
             <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>

</html>
