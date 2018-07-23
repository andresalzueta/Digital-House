<!DOCTYPE html>
<!--Aula-20 21-6-2018-->
<!--cadastro.php -->
<!--http://localhost:8080/teste/-->

<?php
	$titulo = "Aula-20 - Cadastro.php";
	// Crie um arquivo cadastro.php:
	//  a. Crie um formulário que contenha os campos de nome, usuário e senha
	//  b. Ao enviar o formulário criptografe a senha com password_hash ​e faça os dados serem salvos na $_SESSION.
  //  c. Exiba os dados da $_ SESSION na tela.
	session_start();
	// Set session variables
	if ($_POST) {
		$validacao = true;
		if (isset($_POST["name"])){
			$_SESSION["name"] = $_POST["name"];
		}
		if (isset($_POST["user"])){
			$_SESSION["user"] = $_POST["user"];
		}
		if (isset($_POST["senha"])){
			$password = $_POST["senha"];
			$algoritmo1 = PASSWORD_DEFAULT;
			$hash = password_hash($password, $algoritmo1);
			$_SESSION["senha"] = $hash ;
		}
	} else {
		$validacao = false;
		$_SESSION["name"] = null;
		$_SESSION["user"] = null;
		$_SESSION["senha"] = null;
	}
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de Cadastro</title>
	<meta name="description" content="Formulário de Upload de Arquivos">

	<!-- Bootstrap -->
	<link href="assets/libs/bootstrap-3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php
		echo $titulo;
		if (isset($_SESSION["name"]) && $_POST) {echo " | Bem vindo " .$_SESSION["name"] ;}
	?>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-links">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Projeto</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-links">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Início</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">

		<?php if (!$validacao && $_POST) {echo "Preencha corretamente todos os dados... ";} ?>

		<div class="row">

			<form role="form" action="cadastro.php" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="form-group col-sm-4">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="name" name="name" value="<?php if(isset($_SESSION["name"])) {echo $_SESSION["name"];} ?>" placeholder="Insira Nome ">
					</div>
					<div class="form-group col-sm-4">
						<label for="user">Usuário</label>
						<input type="text" class="form-control" id="user" name="user" value="<?php if(isset($_SESSION["user"])) {echo $_SESSION["user"];} ?>" placeholder="Insira username">
					</div>
					<div class="form-group col-sm-4">
						<label for="senha">Senha</label>
						<input type="text" class="form-control" id="senha" name="senha" value="<?php if(isset($_SESSION["senha"])) {echo $_SESSION["senha"];} ?>" placeholder="Insira senha">
					</div>
				</div>

				<input type="submit" name="btn_submit" class="btn btn-info" value="Salvar"/>
			</form>
		</div>

	</div>
	<div class="text-center">&copy; <?php echo date('Y'); ?></div>
	<script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="assets/libs/bootstrap-3/js/bootstrap.min.js"></script>
</body>
</html>
