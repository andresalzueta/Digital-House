<!DOCTYPE html>
<!--Aula-17 07-6-2018-->
<!--index.php -->
<!--http://localhost:8080/teste/-->

<!--No arquivo registro.php​ crie a variável $titulo = 'Tutorial PHP'​,
 imprimir esta variável como título de um documento HTML. Como no exemplo abaixo:-->

<?php
	$titulo = "Tutorial PHP";
	$array_paises = ["Argentina","Brasil","Chile","Colombia","Uruguay"];
	$array_meses = [1,2,3,4,5,6,7,8,9,10,11,12];

	if ($_POST) {
		$validacao = true;
		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$usuario = $_POST["usuario"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$nacionalidade= $_POST["nacionalidade"];

		if (empty($nome) || empty($sobrenome) || empty($usuario) || empty($email) || empty($senha) || empty ($genero) || empty($nacionalidade) ) {
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
	<title>Inscrição</title>
	<meta name="description" content="Inscrição de teste">

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
			<form role="form" action="registro.php" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" value="<?php if(isset($nome)) {echo $nome;} ?>" placeholder="Insira seu nome">
					</div>
					<div class="form-group col-sm-6">
						<label for="sobrenome">Sobrenome</label>
						<input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?php if(isset($sobrenome)) {echo $sobrenome;} ?>" placeholder="Insira seu sobrenome">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="username">Nome de usuário</label>
						<input type="text" class="form-control" id="username" name="usuario" value="<?php if(isset($usuario)) {echo $usuario;} ?>" placeholder="Insira um nome de usuário">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="email">E-mail</label>
						<input type="text" class="form-control" id="email" name="email" value="<?php if(isset($email)) {echo $email;} ?>" placeholder="Insira um e-mail">
					</div>
					<div class="form-group col-sm-6">
						<label for="email-confirm">Confirmar e-mail</label>
						<input type="text" class="form-control" id="email-confirm" name="email_confirm" value="<?php if(isset($email_confirm)) {echo $email_confirm;} ?>" placeholder="Confirme seu e-mail">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="senha">Senha</label>
						<input type="password" class="form-control" id="senha" name="senha" value="<?php if(isset($senha)) {echo $senha;} ?>" placeholder="Insira uma senha">
					</div>
					<div class="form-group col-sm-6">
						<label for="senha-confirm">Confirmar senha</label>
						<input type="password" class="form-control" id="senha-confirm" name="senha_confirm" value="<?php if(isset($senha_confirm)) {echo $senha_confirm;}?>"placeholder="Confirme sua senha">
					</div>
				</div>

				<div class="row">
				   <div class="form-group col-sm-6">
				    	<label>Gênero</label>
					    <div>
						     <label class="radio-inline">
							   		<input type="radio" name="genero" id="genero_masculino" value="Masculino"> Masculino
							 	</label>
								<label class="radio-inline">
										<input type="radio" name="genero" id="genero_feminino" value="Feminino"> Feminino
								</label>
							</div>
						</div>
						<div class="form-group col-sm-6">
									<label for="nacionalidade">Nacionalidade</label>
									<select class="form-control" name="nacionalidade">
													<?php foreach ($array_paises as $key => $value) : ?>
															<option value=' <?php echo $value ?> '><?php echo $value; ?></option>
														<?php endforeach; ?>
									</select>
						</div>
				</div>

				<div class="form-group">
					<label> Data de nascimento</label>
					<div class="row">
						<div class="col-sm-4">
							<select class="form-control" name="fnac_dia">
								<?php for ($i=1; $i <= 31 ; $i++) : ?>
									<option value=' <?php echo $i ?> '><?php echo $i; ?></option>
								<?php endfor; ?>
							</select>
						</div>
						<div class="col-sm-4">
							<select class="form-control" name="fnac_mes">
								<?php foreach ($array_meses as $key => $value) : ?>
									<option value=' <?php echo $value ?> '><?php echo $value; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-sm-4">
							<select class="form-control" name="fnac_ano">
								<?php for ($i=2018; $i >= 1960 ; $i--) : ?>
									<option value=' <?php echo $i ?> '><?php echo $i; ?></option>
								<?php endfor; ?>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Categorias</label>
					<div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="categorias[]" value="Esportes"> Esportes
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="categorias[]" value="Geografia"> Geografia
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="categorias[]" value="História"> História
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="categorias[]" value="Ciências"> Ciências
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="descricao">Descrição</label>
					<textarea id="descricao" name="descricao" class="form-control" rows="3"></textarea>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" id="chk-termos" name="termos"> Aceito os termos e condições
					</label>
				</div>
				<input type="submit" name="btn_submit" class="btn btn-info" value="Inscrever-me"/>
			</form>
		</div>
	</div>
	<div class="text-center">&copy; <?php echo date('Y'); ?></div>
	<script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="assets/libs/bootstrap-3/js/bootstrap.min.js"></script>
</body>
</html>
