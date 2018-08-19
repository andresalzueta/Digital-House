<!DOCTYPE html>
<!--Aula-32 23-7-2018-->
<!--programa_aula32.php -->
<!--Objetos   -->
<?php
	require('Classes\Cadastro.php');
	require('Classes\Cadastro_Usuario.php');
    //use Classes\Cadastro;

 	// Set functions
	function f_limpa_input($data) {
		$data = rtrim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
  	}
	// Set session variables
	session_start();
	$titulo = "Aula-34 - Insere Usuário";
	$errmsg = " ";
	
	// Set date & time variables
    date_default_timezone_set("America/Sao_Paulo");
    $datetimeFormat = "d/m/Y H:i:s";
	$date = date("d/m/Y H:i:s");
	
	if ($_POST) {
		
 	    if (isset($_POST["username"])){
			$_SESSION["username"] = f_limpa_input($_POST["username"]);
			$usuario = f_limpa_input($_POST["username"]);
		 }
		if (isset($_POST["nome"])){
			$nome = f_limpa_input($_POST["nome"]);
 	    }
		if (isset($_POST["sobrenome"])){
			$sobrenome = f_limpa_input($_POST["sobrenome"]);
 	    }
 	    if (isset($_POST["email"])){
			$email = $_POST["email"];
		}
		if (isset($_POST["email_confirm"])){
			$email_confirm = $_POST["email_confirm"];
		}
		if (isset($_POST["senha"])){
			$senha = $_POST["senha"];
 	    }
		if (isset($_POST["senha_confirm"])){
			$senha_confirm = $_POST["senha_confirm"];
		 }
		 if (isset($_POST["lembrete_senha"])){
			$lembrete_senha = $_POST["lembrete_senha"];
 	    }
		
		if (empty($nome) || empty($sobrenome) || empty($usuario) || empty($email) || empty($email_confirm) || empty($senha) || empty($senha_confirm)) {
		    $validacao = false;
		} else {
			$validacao = true;
		}
		if ( $senha !== $senha_confirm ) {
			$validacao = false;
			$errmsg = "Senha diferente da senha de confirmação ".$errmsg;
		} 
		if ( $email !== $email_confirm ) {
			$validacao = false;
			$errmsg = "Email diferente do email de confirmação ".$errmsg;
		}

  	} else {

		$validacao = false;
		$errmsg = "Consulta NÃO realizada...";

		$username = null;
		$userid = null;
		$nome = null;
		$sobrenome = null;
		$apelido = null;
		$nascimento = null;
		$email = null;
		$email_confirm = null;
		$senha = null;
		$senha_confirm = null;
		$lembrete_senha = null;
        $created_at = null;
        $updated_at = null;
		
        $btn_status = null;
        $altera = false;
		$exclui = false;
		$insere = false;


  	}

    if ($validacao){
		$algoritmo = PASSWORD_DEFAULT;
		$senha = password_hash($senha, $algoritmo);
		// Cadastro_Usuario($username,$nome,$sobrenome,$email,$senha,$lembrete_senha,$nascimento);
        $cadastro = new Cadastro_Usuario($usuario,$nome,$sobrenome,$email,$senha,$lembrete_senha);
        $resultado = $cadastro->inserir();
		$errmsg = $cadastro->getErrmsg();

  	} else {
	    $errmsg = "Não validado, registro não inserido no banco de dados. ".$errmsg;
	}

?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insere Novo Pedido</title>
	<meta name="description" content="Insere novo Usuario">

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
					<li><a href="Form_Insere_Usuario.php">Insere</a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="Form_Edita_Usuario.php">Edita</a></li>
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
			<form role="form" class="form-vertical" action="Form_Insere_Usuario.php" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="form-group col-sm-12">
						<label for="username">Nome de usuário</label>
						<input type="text" class="form-control" id="username" name="username" value="<?php if(isset($usuario)) {echo $usuario;} ?>" placeholder="Insira um nome de usuário">
					</div>
				</div>
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
						<label for="email">E-mail</label>
						<input type="email" class="form-control" id="email" name="email" value="<?php if(isset($email)) {echo $email;} ?>" placeholder="Insira um e-mail">
					</div>
					<div class="form-group col-sm-6">
						<label for="email-confirm">Confirmar e-mail</label>
						<input type="email" class="form-control" id="email_confirm" name="email_confirm" value="<?php if(isset($email_confirm)) {echo $email_confirm;} ?>" placeholder="Confirme seu e-mail">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="senha">Senha</label>
						<input type="password" class="form-control" id="senha" name="senha" value="<?php if(isset($senha)) {echo $senha;} ?>" placeholder="Insira uma senha">
					</div>
					<div class="form-group col-sm-6">
						<label for="senha_confirm">Confirmar senha</label>
						<input type="password" class="form-control" id="senha_confirm" name="senha_confirm" value="<?php if(isset($senha_confirm)) {echo $senha_confirm;}?>"placeholder="Confirme sua senha">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="lembrete_senha">lembrete_senha</label>
						<input type="text" class="form-control" id="lembrete_senha" name="lembrete_senha" value="<?php if(isset($lembrete_senha)) {echo $lembrete_senha;} ?>" placeholder="Insira um lembrete de senha">
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
