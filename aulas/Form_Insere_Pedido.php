<!DOCTYPE html>
<!--Aula-32 23-7-2018-->
<!--programa_aula32.php -->
<!--Objetos   -->
<?php
    require('Cliente.php');
    require('Produto.php');
	require('Pedido.php');
	use Classes\Cliente;
	use Classes\Produto;
	use Classes\Carrinho;
	use Classes\Classes;
	use \PDO;

    echo '<br>';
    
?>

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
	$titulo = "Aula-32 - Insere Pedido";
	$errmsg = " ";
	
	// Set date & time variables
    date_default_timezone_set("America/Sao_Paulo");
    $datetimeFormat = "d/m/Y H:i:s";
	$date = date("d/m/Y H:i:s");
	
	if ($_POST) {
 	 if (isset($_POST["cliente"])){
		  $_SESSION["cliente"] = f_limpa_input($_POST["cliente"]);
 	 }
 	 if (isset($_POST["email"])){
		  $_SESSION["email"] = $_POST["email"];
 	 }
	 if (empty($_SESSION["cliente"]) || empty($_SESSION["email"]) ) {
 		 $validacao = false;
 	 } else {
 		 $validacao = true;
 	 }
  	} else {
 		$validacao = false;
 	 	$_SESSION["cliente"] = null;
 	 	$_SESSION["email"] = null;
  	}

?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insere Novo Pedido</title>
	<meta name="description" content="Insere novo Pedido">

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
					<li><a href="Form_Insere_Pedido.php">Insere</a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="Form_Edita_Pedido.php">Edita</a></li>
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
			<form role="form" class="form-vertical" action="Form_Insere_Pedido.php" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="title">Nome do Cliente</label>
						<input type="text" class="form-control" id="cliente" name="cliente" value="<?php if(isset($_SESSION["cliente"])) {echo $_SESSION["cliente"];} ?>" placeholder="Insira Nome do Cliente">
					</div>
					<div class="form-group col-sm-6">
						<label for="awards">Email</label>
						<input type="email" class="form-control" id="email" name="email" value="<?php if(isset($_SESSION["email"])) {echo $_SESSION["email"];} ?>" placeholder="Insira email">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-sm-1">
						<label for="id_item1">Item 1</label>
						<input type="number" class="form-control" id="id_item1" name="id_item1" min="1" max="1" step="1" value="<?php if(isset($_SESSION["id_item1"])) {echo $_SESSION["id_item1"];} ?>" placeholder="1">
					</div>
					<div class="form-group col-sm-2">
						<label for="id_produto">Código</label>
						<input type="text" class="form-control" id="id_produto1" name="id_produto1" value="<?php if(isset($_SESSION["id_produto1"])) {echo $_SESSION["id_produto1"];} ?>" placeholder="Código 1">
					</div>
					<div class="form-group col-sm-6">
						<label for="title">Descrição do produto1</label>
						<input type="text" class="form-control" id="produto1" name="produto1" value="<?php if(isset($_SESSION["produto1"])) {echo $_SESSION["produto1"];} ?>" placeholder="Insira Descrição do produto1">
					</div>
					<div class="form-group col-sm-1">
						<label for="id_produto">Quantidade</label>
						<input type="number" class="form-control" id="qtde1" name="qtde1" min="0" max="99" step="1" value="<?php if(isset($_SESSION["qtde1"])) {echo $_SESSION["qtde1"];} ?>" placeholder="Qtde 1">
					</div>
					<div class="form-group col-sm-2">
						<label for="id_produto">Valor</label>
						<input type="number" class="form-control" id="valor1" name="valor1" min="0" max="99" step="1" value="<?php if(isset($_SESSION["valor1"])) {echo $_SESSION["valor1"];} ?>" placeholder="Valor 1">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-1">
						<input type="number" class="form-control" id="id_item2" name="id_item2" min="2" max="2" step="1" value="<?php if(isset($_SESSION["id_item2"])) {echo $_SESSION["id_item2"];} ?>" placeholder="2">
					</div>
					<div class="form-group col-sm-2">
						<input type="text" class="form-control" id="id_produto2" name="id_produto2" value="<?php if(isset($_SESSION["id_produto2"])) {echo $_SESSION["id_produto2"];} ?>" placeholder="Código 2">
					</div>
					<div class="form-group col-sm-6">
						<input type="text" class="form-control" id="produto2" name="produto2" value="<?php if(isset($_SESSION["produto2"])) {echo $_SESSION["produto2"];} ?>" placeholder="Insira Descrição do produto2">
					</div>
					<div class="form-group col-sm-1">
						<input type="number" class="form-control" id="qtde2" name="qtde2" min="0" max="99" step="1" value="<?php if(isset($_SESSION["qtde2"])) {echo $_SESSION["qtde2"];} ?>" placeholder="Qtde 2">
					</div>
					<div class="form-group col-sm-2">
						<input type="number" class="form-control" id="valor2" name="valor2" min="0" max="99" step="1" value="<?php if(isset($_SESSION["valor2"])) {echo $_SESSION["valor2"];} ?>" placeholder="Valor 2">
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
