<!DOCTYPE html>
<!--Aula-19 19-6-2018-->
<!--form_file.php -->
<!--http://localhost:8080/teste/-->

<!--No arquivo registro.php​ crie a variável $titulo = 'Tutorial PHP'​,
 imprimir esta variável como título de um documento HTML. Como no exemplo abaixo:-->

<?php
	$titulo = "Formulário";
	if ($_POST) {
		$validacao = true;
		$filename = $_POST["filename"];
		$diretory = $_POST["diretory"];

		if (empty($filename) || empty($diretory)) {
			$validacao = false;
		} else {
			$validacao = true;
		}

		if ($validacao) {
			header("Location:confirmacao.php");
			exit;
		}
  }

?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de Upload</title>
	<meta name="description" content="Formulário de Upload de Arquivos">

	<!-- Bootstrap -->
	<link href="assets/libs/bootstrap-3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php echo $titulo?>

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

		<?php if (isset($validacao) && $_POST) {echo "Preencha corretamente todos os dados... ";} ?>

		<div class="row">
			<form role="form" action="upload.php" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="nome">Nome do Arquivo</label>
						<input type="text" class="form-control" id="filename" name="filename" value="<?php if(isset($filename)) {echo $filename;} ?>" placeholder="Insira nome do arquivo">
					</div>
					<div class="form-group col-sm-6">
						<label for="sobrenome">Diretório</label>
						<input type="text" class="form-control" id="directory" name="diretory" value="<?php if(isset($diretory)) {echo $diretory;} ?>" placeholder="Insira diretorio">
					</div>
				</div>

				<div class="form-group">
					<label for="descricao">Descrição</label>
					<textarea id="descricao" name="descricao" class="form-control" rows="3"></textarea>
				</div>

				<input type="submit" name="btn_submit" class="btn btn-info" value="Upload"/>
			</form>
		</div>

	</div>
	<div class="text-center">&copy; <?php echo date('Y'); ?></div>
	<script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="assets/libs/bootstrap-3/js/bootstrap.min.js"></script>
</body>
</html>
