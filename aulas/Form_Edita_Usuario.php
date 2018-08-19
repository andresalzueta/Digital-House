<!DOCTYPE html>
<!--Aula-32 23-7-2018-->
<!--programa_aula32.php -->
<!--Objetos   -->
<?php
    require('Classes\ConexaoDB.php');
    require('Classes\Verifica_Login.php');
    require('Classes\Cadastro_Usuario.php');
    //use Classes\Cadastro;

 	// Set functions
	function f_limpa_input($data) {
		$data = rtrim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
  	}
	// Set  variables
	if (!session_start()) {
		session_start();
	}
	$titulo = "Aula-34 - Edita Usuário";
	$errmsg = " ";
	$logado = false;
    //session_start();    

	// Set date & time variables
    date_default_timezone_set("America/Sao_Paulo");
    $datetimeFormat = "d/m/Y H:i:s";
	$date = date("d/m/Y H:i:s");

	if ($_POST || isset($_SESSION['logado'])) {

		if(isset($_SESSION['logado'])){
			$logado = $_SESSION['logado'];
			$username = $_SESSION['username'];
			$userid = $_SESSION['userid'];
			$nome = $_SESSION['nome'];
			$sobrenome = $_SESSION['sobrenome'];
			$apelido = $_SESSION['apelido'];
			$email = $_SESSION['email'];
			$email_confirm = $_SESSION['email'];
			$senha = $_SESSION['senha'];
			$senha_confirm = $_SESSION['senha'];
			$lembrete_senha = $_SESSION['lembrete_senha'];
			$errmsg = $_SESSION['errmsg'];
			$titulo = $titulo  ." | " .$username ." | " .$errmsg;
		}
	
		if(isset($_POST['btn_logout'])){
			// Crio o novo objeto sem dados, pois so preciso da funcao que encerra a sessao
			$verifica_login = new Verifica_Login("", "", "");
			$verifica_login->encerraSessao();                
			header('location:index.php');
		}
	
		if (isset($_POST["btn_login"])){
            $userid = $_POST["userid"];
            $btn_status = "login";
		}

		if (isset($_POST["btn_replace"])){
            $userid = $_SESSION["userid"];
            $btn_status = "replace";
            if 	(isset($_POST["username"])){
				$username = $_SESSION["username"] = f_limpa_input($_POST["username"]);
            }
			if 	(isset($_POST["nome"])){
				$nome = $_SESSION["nome"] =  f_limpa_input($_POST["nome"]);
            }
            if (isset($_POST["sobrenome"])){
                $sobrenome = $_SESSION["sobrenome"] =  f_limpa_input($_POST["sobrenome"]);
            }
            if (isset($_POST["senha"])){
                $senha = $_POST["senha"];
			}
			if (isset($_POST["senha_confirm"])){
                $senha_confirm = $_POST["senha_confirm"];
            }
			if (isset($_POST["email"])){
                $email = $_SESSION["email"] = $_POST["email"];
			}
			if (isset($_POST["email_confirm"])){
                $email_confirm = $_SESSION["email_confirm"] = $_POST["email_confirm"];
            }
			//if (isset($_POST["nascimento"])){
            //    $nascimento = $_SESSION["nascimento"] = $_POST["nascimento"];
            //}
            if (isset($_POST["lembrete_senha"])){
                $lembrete_senha = $_SESSION["lembrete_senha"] = $_POST["lembrete_senha"];
            }
            if (isset($_POST["apelido"])){
                $apelido = $_SESSION["apelido"] = $_POST["apelido"];
            }
		}
 
		if ( $senha !== $senha_confirm ) {
			$validacao = false;
			$errmsg = "Senha diferente da senha de confirmação ".$errmsg;
		} 
		if ( $email !== $email_confirm ) {
			$validacao = false;
			$errmsg = "Email diferente do email de confirmação ".$errmsg;
		}

		//valida antes de alterar
		if (empty($username) || empty($userid) || empty($nome) || empty($sobrenome) || empty($email) || empty($apelido) || empty($email_confirm) || empty($senha) || empty($senha_confirm) || empty($lembrete_senha) ) {
			$validacao = false;
			$altera = false;
		} else {
			$validacao = true;
			$altera = true;
		}
		
		if ($validacao && $altera){
			$algoritmo = PASSWORD_DEFAULT;
			$senha = password_hash($senha, $algoritmo);
			// Cadastro_Usuario($username,$nome,$sobrenome,$email,$senha,$lembrete_senha);
			$cadastro = new Cadastro_Usuario($username,$nome,$sobrenome,$email,$senha,$lembrete_senha);
			$resultado = $cadastro->alterar();
			$errmsg = $cadastro->getErrmsg();
		  } else {
			$errmsg = "Não validado, registro não alterado no banco de dados. ".$errmsg;
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
  <?php echo $titulo ." - " .$errmsg; ?>

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
			elseif (!$_POST) {echo "Preencha todos os dados... " .$errmsg;;} 
			elseif ($validacao) {echo "Validado. " .$errmsg;} 
		?>
		<div class="row">

			<form role="form" class="form-vertical" action="Form_Edita_Usuario.php" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="form-group col-sm-2">
						<label for="userid">ID de usuário</label>
						<input type="text" class="form-control disabled" id="userid" name="userid" value="<?php if(isset($userid)) {echo $userid;} ?>" placeholder="ID" readonly>
					</div>
					<div class="form-group col-sm-10">
						<label for="username">Nome de usuário</label>
						<input type="text" class="form-control" id="username" name="username" value="<?php if(isset($username)) {echo $username;} ?>" placeholder="Insira um nome de usuário">
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

			<button type="submit" name="btn_login" class="btn btn-info">Logar</button>	
			<button type="submit" name="btn_logout" class="btn btn-basic">Deslogar</button>
			<button type="submit" name="btn_refresh" class="btn btn-success" >Refresh</button>
			<button type="submit" name="btn_replace" class="btn btn-warning">Alterar</button>

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
