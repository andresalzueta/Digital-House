<!DOCTYPE html>
<!--Aula-40 12-8-2018-->
<!--Página com HEADER.PHP -->
<!-- cabecalho -->
<header id="top" class="main-header">
	<div class="container-fluid">
	
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
	  		<!-- Brand -->
	  		<a class="navbar-brand" href="#">Logo</a>

  			<!-- Links -->
  			<ul class="navbar-nav">
	    		<li class="nav-item">
      				<a class="nav-link" href="http://localhost:8080/Digital-House/Laravel/public/home">Home</a>
    			</li>
    			<!-- Dropdown -->
	    		<li class="nav-item dropdown">
		    	  	<a class="nav-link dropdown-toggle" href="http://localhost:8080/Digital-House/Laravel/public/actors" id="navbardrop" data-toggle="dropdown">
        			Actors
    	  			</a>
				    <div class="dropdown-menu">
        				<a class="dropdown-item" href="http://localhost:8080/Digital-House/Laravel/public/actors">Exibir Atores</a>
						<a class="dropdown-item" href="http://localhost:8080/Digital-House/Laravel/public/actor">Inserir Ator</a>
      				</div>
    			</li>
    			<!-- Dropdown -->
	    		<li class="nav-item dropdown">
		      		<a class="nav-link dropdown-toggle" href="http://localhost:8080/Digital-House/Laravel/public/movies" id="navbardrop" data-toggle="dropdown">
        			Movies
      				</a>
				    <div class="dropdown-menu">
	        			<a class="dropdown-item" href="http://localhost:8080/Digital-House/Laravel/public/movies">Exibir Filmes</a>
						<a class="dropdown-item" href="http://localhost:8080/Digital-House/Laravel/public/movie">Inserir Filme</a>
      				</div>
    			</li>
    			<!-- Dropdown -->
				<li class="nav-item dropdown">
		      		<a class="nav-link dropdown-toggle" href="http://localhost:8080/Digital-House/Laravel/public/movies" id="navbardrop" data-toggle="dropdown">
        			Genres
      				</a>
				    <div class="dropdown-menu">
	        			<a class="dropdown-item" href="http://localhost:8080/Digital-House/Laravel/public/genres">Exibir Generos</a>
      				</div>
    			</li>

    			<li class="nav-item navbar-right">
      				<a class="nav-link" href="http://localhost:8080/Digital-House/Laravel/public/login">Login</a>
    			</li>
			</ul>
		</nav>
	</div>
</header>
