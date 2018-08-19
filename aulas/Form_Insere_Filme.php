<!DOCTYPE html>
<!--Aula-27 05-7-2018-->
<!--Form_Insere_Filme.php -->
<!--http://localhost:8080/teste/-->

<!--No arquivo registro.php​ crie a variável $titulo = 'Tutorial PHP'​,
 imprimir esta variável como título de um documento HTML. Como no exemplo abaixo:-->

<?php
 	// Set functions
	function f_limpa_input($data) {
		$data = rtrim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
  	}
	// Set session variables
	session_start();
	$titulo = "Aula-27 - Insere Filme";
	$errmsg = " ";
	$campos = ["id", "created_at", "updated_at", "title", "rating", "awards", "release_date", "length", "genre_id"];

	// Set date & time variables
    date_default_timezone_set("America/Sao_Paulo");
    $datetimeFormat = "d/m/Y H:i:s";
	$date = date("d/m/Y H:i:s");
	
	if ($_POST) {
 	 if (isset($_POST["title"])){
		  $_SESSION["title"] = f_limpa_input($_POST["title"]);
		  $title = f_limpa_input($_POST["title"]);
 	 }
 	 if (isset($_POST["rating"])){
		  $_SESSION["rating"] = $_POST["rating"];
		  $rating = $_POST["rating"];
 	 }
 	 if (isset($_POST["awards"])){
		  $_SESSION["awards"] = $_POST["awards"];
		  $awards = $_POST["awards"];
 	 }
 	 if (isset($_POST["release_date"])){
		  $_SESSION["release_date"] = $_POST["release_date"];
		  $release_date = $_POST["release_date"];
 	 }
 	 if (isset($_POST["length"])){
		  $_SESSION["length"] = $_POST["length"];
		  $length = $_POST["length"];
 	 }
 	 if (isset($_POST["genre_id"])){
		  $_SESSION["genre_id"] = $_POST["genre_id"];
		  $genre_id = $_POST["genre_id"];
 	 }
	 if (empty($_SESSION["title"]) || empty($_SESSION["rating"]) || empty($_SESSION["awards"]) || empty($_SESSION["release_date"]) || empty($_SESSION["length"]) || empty($_SESSION["genre_id"]) ) {
 		 $validacao = false;
 	 } else {
 		 $validacao = true;
 	 }
  	} else {
 		$validacao = false;
 	 	$_SESSION["title"] = null;
 	 	$_SESSION["rating"] = null;
 	 	$_SESSION["awards"] = null;
 	 	$_SESSION["release_date"] = null;
 	 	$_SESSION["length"] = null;
		$_SESSION["genre_id"] = null;
  	}

  	$dsn = "mysql:host=localhost;dbname=movies_db;charset=utf8mb4;port=3306";
  	$db_user = "root";
  	$db_password = "a123456!";
  	$db=null;
  	try {
	  $db = new PDO($dsn, $db_user, $db_password);
  	}
  	catch( PDOException $Exception ) {
      echo $Exception->getMessage();
  	}
	if (isset($db)){
		$campos_genres = ["id","created_at","updated_at","name","ranking","active"];
		$query2 = $db->query("SELECT genres.id, genres.name FROM genres");
		$array_genres = $query2->fetchAll(PDO::FETCH_ASSOC);
		$errmsg = "Há conexão com DataBase";
  	} else {
	    $errmsg = "Não há conexão com DataBase";
  	}
	if (isset($db) && $validacao){
		$campos_movies = ["id", "created_at", "updated_at", "title", "rating", "awards", "release_date", "length", "genre_id"];
		//valida antes de inserir
		$sql3 = "SELECT movies.title FROM movies WHERE movies.title='$title'";
		$query3 = $db->query($sql3);
		$linhas = $query3->rowCount();
		if ($linhas == 0) {
			$sql1 ="INSERT INTO movies (movies.title, movies.rating, movies.awards, movies.release_date, movies.length, movies.genre_id, movies.created_at, movies.updated_at) 
			        VALUES (:b_title, :b_rating, :b_awards, :b_release_date, :b_length, :b_genre_id, :b_created_at, :b_updated_at)";
			$query1 = $db->prepare($sql1);
			// variáveis de conexão<>binding  :b_variavel
			$query1->execute([
				":b_title" => $title,
				":b_rating" => $rating,
				":b_awards" => $awards,
				":b_release_date" => $release_date,
				":b_length" => $length,
				":b_genre_id" => $genre_id,
				":b_created_at" => date("Y-m-d H:i:s"),
				":b_updated_at" => date("Y-m-d H:i:s")
			]);
			$errmsg = "Registro inserido na tabela com ID = " .$db->lastInsertId();

		} elseif ($linhas > 0) {
			$sql1 ="SELECT * FROM movies WHERE  movies.title='$title'";
			$query1 = $db->prepare($sql1);
			// variáveis de conexão<>binding  :b_variavel
			$query1->execute();
			$results1 = $query1->fetchAll(PDO::FETCH_ASSOC);
			$errmsg = "Nome do filme já existe na tabela, insira outro nome ! ";
		}	

	} else {
    	$errmsg = "Verifique campos não preenchidos...";
  	}
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insere Novo Filme</title>
	<meta name="description" content="Insere novo Filme">

	<!-- Bootstrap -->
	<link href="assets/libs/bootstrap-3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php echo $titulo ." - " ?>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-links">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Home</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-links">
				<ul class="nav navbar-nav">
					<li><a href="Form_Insere_Filme.php">Insere</a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="Form_Edita_Filme.php">Edita</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">

		<?php if (!$validacao && $_POST) {echo "Preencha corretamente todos os dados ! " .$errmsg;}  
			elseif (!$_POST) {echo "Preencha todos os dados... ";} 
			elseif ($validacao) {echo "Validado. " .$errmsg;} 
		?>

		<div class="row">
			<form role="form" class="form-vertical" action="Form_Insere_Filme.php" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="form-group col-sm-12">
						<label for="title">Título do Filme</label>
						<input type="text" class="form-control" id="title" name="title" value="<?php if(isset($_SESSION["title"])) {echo $_SESSION["title"];} ?>" placeholder="Insira título do filme">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="awards">Prêmios</label>
						<input type="number" class="form-control" id="awards" name="awards" min="0" max="99" step="1" value="<?php if(isset($_SESSION["awards"])) {echo $_SESSION["awards"];} ?>" placeholder="Insira prêmios">
					</div>
					<div class="form-group col-sm-6">
						<label for="rating">Rating</label>
						<input type="number" class="form-control" id="rating" name="rating" min="0" max="10" step="0.1" value="<?php if(isset($_SESSION["rating"])) {echo $_SESSION["rating"];} ?>" placeholder="Insira rating">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="release_date">Data de Lançamento</label>
						<input type="date" class="form-control" id="release_date" name="release_date" min="1900-01-01" value="<?php if(isset($_SESSION["release_date"])) {echo $_SESSION["release_date"];} ?>" placeholder="Insira Data de Lançamento">
					</div>
					<div class="form-group col-sm-6">
						<label for="length">Duração do filme (em minutos)</label>
						<input type="number" class="form-control" id="length" name="length" min="10" max="999" step="1" value="<?php if(isset($_SESSION["length"])) {echo $_SESSION["length"];} ?>" placeholder="Defina tamanho do filme">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-1">
						<label for="genre_id">Gênero</label>
						<select class="form-control" name="genre_id" id="genre_id">
							<?php foreach ($array_genres as $key => $value) : ?>
       			                   <option value="<?php echo $value["id"]?>" <?php if($_SESSION["genre_id"]===$value["id"]){echo " selected";} ?>><?php echo $value["id"] ."-" .$value["name"]; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<button type="submit" name="btn_submit" class="btn btn-info">Inserir</button>	
			</form>
		</div>
	</div>
	<div class="text-center">&copy; <?php echo "Quarteto Fantástico - " .date('Y'); ?></div>
	<script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="assets/libs/bootstrap-3/js/bootstrap.min.js"></script>
</body>
</html>

<?php
  //Fechar conexão com banco
  $db = null;
?>
