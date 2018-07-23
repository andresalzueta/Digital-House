<!DOCTYPE html>
<!--Aula-27 10-7-2018-->
<!--Form_Exclui_Filme.php -->
<!--http://localhost:8080/teste/-->

<?php
    
	// Set session variables
	session_start();
	$titulo = "Aula-27 - Edita Filme";
    $errmsg = " ";
    $exclui = false;

    // Set date & time variables
    date_default_timezone_set("America/Sao_Paulo");
    $datetimeFormat = "d/m/Y H:i:s";
    $date = date("d/m/Y H:i:s");
        
    //$array_timestamp = Array ( [seconds] => 18 [minutes] => 26 [hours] => 13 [mday] => 15 [wday] => 0 [mon] => 7 [year] => 2018 [yday] => 195 [weekday] => Sunday [month] => July [0] => 1531671978 );
    $array_timestamp=getdate();
    $timestamp=$array_timestamp[0];
    $timestampFormat = "Y-m-d H:i:s";
            
    // Set functions
    function f_format_timestamp($a=null,$format) {
        if ($a == null) {
            $b = null;
        } else {
            $stamp = strtotime($a); 
            $new_date = date($format, $stamp);
            $b = $new_date;
        }
		return $b;
  	}

    // Set DB connection
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
        $campos_movies = ["id", "created_at", "updated_at", "title", "rating", "awards", "release_date", "length", "genre_id"];
        //consulta número de registros
        $sql = "SELECT movies.id FROM movies";
	    $query = $db->query($sql);
        $registros = $query->rowCount();
            
        //consulta tabela gêneros
        $campos_genres = ["id","created_at","updated_at","name","ranking","active"];
        $sql2 = "SELECT genres.id, genres.name FROM genres";
        $query2 = $db->query($sql2);
        $array_genres = $query2->fetchAll(PDO::FETCH_ASSOC);

        $errmsg = "Há conexão com DataBase";
    } else {
        $errmsg = "Não há conexão com DataBase";
    }

    // Capture GET & POST session variables and Button response
	if ($_POST && isset($db)) {
		if (isset($_POST["btn_reset"])){
            $_SESSION["id"] = null ;
            $_SESSION["title"] = null;
            $_SESSION["rating"] = null;
            $_SESSION["awards"] = null;
            $_SESSION["release_date"] = null;
            $_SESSION["length"] = null;
            $_SESSION["genre_id"] = null;
            $_SESSION["created_at"] = null;
            $_SESSION["updated_at"] = null;       
            $created_at = $updated_at = null;
            $_SESSION["btn_status"] = "reset";

        }
        if (isset($_POST["btn_first"])){
            $_SESSION["id"] = 1;
            $_SESSION["btn_status"] = "first";
        }
        if (isset($_POST["btn_last"])){
            $_SESSION["id"] = $registros;
            $_SESSION["btn_status"] = "last";
        }
		if (isset($_POST["btn_next"])){
            $_SESSION["id"] ++;
            $_SESSION["btn_status"] = "next";
		}
		if (isset($_POST["btn_previous"])){
            if ($_SESSION["id"] > 1) {
                $_SESSION["id"] --;
            }
            $_SESSION["btn_status"] = "previous";
		}
		if (isset($_POST["btn_refresh"])){
            $_SESSION["id"] = $_POST["id"];
            $_SESSION["btn_status"] = "refresh";
		}
		if (isset($_POST["btn_replace"])){
            $idMovie = $_SESSION["id"] = $_POST["id"];
            $_SESSION["btn_status"] = "replace";
            if 	(isset($_POST["title"])){
                $_SESSION["title"] = $_POST["title"];
                $title =$_POST["title"];
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
            if (isset($_POST["created_at"])){
                $_SESSION["created_at"] = $_POST["created_at"];
                $created_at = $_POST["created_at"];
            }
            if (isset($_POST["updated_at"])){
                $_SESSION["updated_at"] = $_POST["updated_at"];
                $updated_at = date("Y-m-d H:i:s");
            }
            if (isset($_POST["length"])){
                $_SESSION["length"] = $_POST["length"];
                $length = $_POST["length"];
            }
            if (isset($_POST["genre_id"])){
                $_SESSION["genre_id"] = $_POST["genre_id"];
                $genre_id = $_POST["genre_id"];
            }
            //valida antes de alterar
            if (empty($_SESSION["title"]) || empty($_SESSION["rating"]) || empty($_SESSION["awards"]) || empty($_SESSION["release_date"]) || empty($_SESSION["length"]) || empty($_SESSION["genre_id"]) ) {
                $validacao = false;
                $altera = false;
            } else {
                $validacao = true;
                $altera = true;
            }
  
		    if ($altera) {
                $sql3 ="UPDATE movies 
                        SET movies.title = :b_title,
                            movies.rating = :b_rating, 
                            movies.awards = :b_awards, 
                            movies.length = :b_length, 
                            movies.genre_id = :b_genre_id,
                            movies.release_date = :b_release_date,
                            movies.created_at = :b_created_at,
                            movies.updated_at = :b_updated_at
                        WHERE movies.id = $idMovie";
                $query3 = $db->prepare($sql3);
                // variáveis de conexão<>binding  :b_variavel
                $query3->execute([
                    ":b_title" => $title, 
                    ":b_rating" => $rating, 
                    ":b_awards" =>$awards, 
                    ":b_length" => $length, 
                    ":b_genre_id" => $genre_id,
                    ":b_release_date" => $release_date,
                    ":b_created_at" => f_format_timestamp($created_at,"Y-m-d H:i:s"),
                    ":b_updated_at" => date("Y-m-d H:i:s")
                ]);
                $errmsg = "Registro alterado na tabela com ID = " .$idMovie;  
    		}
		}
		if (isset($_POST["btn_delete"])){
            $_SESSION["id"] = $_POST["id"];
            $idMovie = $_SESSION["id"];
            $exclui = true;
		    if ($exclui) {
                $sql3 ="DELETE FROM movies WHERE movies.id='$idMovie'";
                $query3 = $db->prepare($sql3);
                $query3->execute();
                $errmsg = "Registro excluido na tabela com ID = " .$idMovie;  
                $exclui = false;
                if ($_SESSION["id"] = 1 && $_SESSION["id"] = $registros) {
                    $_SESSION["id"] = null;
                } elseif ($_SESSION["id"] = 1) {
                    $_SESSION["id"] ++;
                } elseif ($_SESSION["id"] > 1) {
                    $_SESSION["id"] --;
                }
    		}
            $_SESSION["btn_status"] = "delete";
        }
		
		//Validações
	    if (empty($_SESSION["title"]) || empty($_SESSION["rating"]) || empty($_SESSION["awards"]) || empty($_SESSION["release_date"]) || empty($_SESSION["length"]) || empty($_SESSION["genre_id"]) ) {
 		     $validacao = false;
 	    } else {
 		     $validacao = true;
        }
        //atualiza variáveis de sessão com nova consulta ao registro da tabela
        if (isset($db) && $_SESSION["id"]){
            //prepara consulta de um registro na tabela movies
            $idMovie = $_SESSION["id"];
            $sql1 ="SELECT * FROM movies WHERE movies.id='$idMovie'";
            $query1 = $db->prepare($sql1);
            $query1->execute();
            $results = $query1->fetchAll(PDO::FETCH_ASSOC);
            $contaregistro = $query1->rowCount();
            if ($contaregistro==1) {
                $_SESSION["id"] = $results[0]["id"];
                $_SESSION["title"] = $results[0]["title"];
                $_SESSION["rating"] = $results[0]["rating"];
                $_SESSION["awards"] = $results[0]["awards"];
                $_SESSION["length"] = $results[0]["length"];
                $_SESSION["genre_id"] = $results[0]["genre_id"];
                $_SESSION["release_date"] = substr($results[0]["release_date"],0,10);
                // formata timestamp para exibição como data
                $_SESSION["created_at"] = substr(f_format_timestamp($results[0]["created_at"],$timestampFormat),0,19);
                $_SESSION["updated_at"] = substr(f_format_timestamp($results[0]["updated_at"],$timestampFormat),0,19);
            } else {
                $validacao = false;
                $_SESSION["title"] = null;
 	 	        $_SESSION["rating"] = null;
 	 	        $_SESSION["awards"] = null;
 	 	        $_SESSION["release_date"] = null;
 	 	        $_SESSION["length"] = null;
	  	        $_SESSION["genre_id"] = null;
                $_SESSION["created_at"] = null;
                $_SESSION["updated_at"] = null;
                $altera = $exclui = false;
                $created_at = $updated_at = null;
                $errmsg = "Consulta NÃO realizada. Não há registro com ID = ".$_SESSION["id"];
            }

        } else {
            $errmsg = "Consulta NÃO realizada...";
        }

  	} else {
 		$validacao = false;
        $_SESSION["id"] = 0;  
        $_SESSION["title"] = null;
 	 	$_SESSION["rating"] = null;
 	 	$_SESSION["awards"] = null;
 	 	$_SESSION["release_date"] = null;
 	 	$_SESSION["length"] = null;
	  	$_SESSION["genre_id"] = null;
        $_SESSION["created_at"] = null;
        $_SESSION["updated_at"] = null;       
        $_SESSION["btn_status"] = null;
        $altera = false;
        $exclui = false;
        $created_at = null;
        $updated_at = null;
        $errmsg = "Consulta NÃO realizada...";
  	}
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insere Novo Filme</title>
	<meta name="description" content="Edita Filme">

	<!-- Bootstrap -->
	<link href="assets/libs/bootstrap-3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php echo $titulo ." - Data: " .$date ?>

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
        
        <div class="text-left">
            <?php 
                // Mensagens de Status
                echo "Status do botão = " .$_SESSION["btn_status"]; 
                echo "<br>";
                echo "Mensagem = " .$errmsg;
                echo "<br>";
                echo "Validação = ";
                if ($exclui && $_POST) {echo "Confirme a exclusão do registro ! ";}  
                elseif (!$validacao && $_POST) {echo "Preencha corretamente todos os dados ! ";}  
                elseif (!$_POST) {echo "Preencha todos os dados... ";} 
                elseif ($validacao) {echo "Validado. " ;}
            ?>
        </div> 
		

		<div class="row">
			<form role="form" action="Form_Edita_Filme.php" method="post" enctype="multipart/form-data">

				<div class="row">
					<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-1">
						<label for="id">ID do Filme</label>
						<input type="number" class="form-control disabled" id="id" name="id" min="1" step="1" value="<?php if(isset($_SESSION["id"])) {echo $_SESSION["id"];} ?>" placeholder="ID" readonly>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-sm-12">
						<label for="title">Título do Filme</label>
						<input type="text" class="form-control" id="title" name="title" value="<?php if(isset($_SESSION["title"])) {echo $_SESSION["title"];} ?>" size="100" placeholder="Insira título do filme">
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
					<div class="form-group col-sm-6">
						<label for="created_at">Data Criação (Timestamp)</label>
						<input type="text" class="form-control" id="created_at" name="created_at" min="2000-01-01" value="<?php if(isset($_SESSION["created_at"])) {echo $_SESSION["created_at"];} ?>" placeholder="Insira Data de Registro" readonly>
					</div>
					<div class="form-group col-sm-6">
						<label for="updated_at">Data de Atualização (Timestamp)</label>
                        <input type="text" class="form-control" id="updated_at" name="updated_at" min="2000-01-01" value="<?php if(isset($_SESSION["updated_at"])) {echo $_SESSION["updated_at"];} ?>" placeholder="Insira Data de Atualização" readonly>
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
				
				<button type="submit" name="btn_reset" class="btn btn-basic">Resetar</button>
                <button type="submit" name="btn_first" class="btn btn-info">Primeiro</button>
				<button type="submit" name="btn_previous" class="btn btn-primary" >Anterior</button>
				<button type="submit" name="btn_refresh" class="btn btn-success" >Refresh</button>
				<button type="submit" name="btn_next" class="btn btn-primary">Próximo</button>	
                <button type="submit" name="btn_last" class="btn btn-info">Último</button>
				<button type="submit" name="btn_replace" class="btn btn-warning">Alterar</button>
				<button type="submit" name="btn_delete" class="btn btn-danger">Deletar</button>
 

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
