<!DOCTYPE html>
<!--Projeto Integrador | Editado em 01-7-2018 por Andrés Alzueta-->
<!--cadastro.php -->
<!--http://localhost:8080/Digital-House/Loja_QFDH/cadastro.php-->

<?php
	$titulo = "Faça seu cadastro e comece um mundo de possibilidades!";
  $array_paises = ["Argentina","Brasil","Chile","Colombia","EUA","Uruguay"];
	$array_meses = [1,2,3,4,5,6,7,8,9,10,11,12];

	session_start();
	// Set session variables
	if ($_POST) {
		$validacao = true;

		if (isset($_POST["nome"])){
			$_SESSION["nome"] = $_POST["nome"];
    }
    if (isset($_POST["sobrenome"])){
			$_SESSION["sobrenome"] = $_POST["sobrenome"];
    }
		if (isset($_POST["usuario"])){
			$_SESSION["usuario"] = $_POST["usuario"];
		}
		if (isset($_POST["senha"])){
			$password1 = $_POST["senha"];
			$algoritmo = PASSWORD_DEFAULT;
			$hash1 = password_hash($password1, $algoritmo);
			$_SESSION["senha"] = $hash1 ;
		}
    if (isset($_POST["senha_confirm"])){
      $password2 = $_POST["senha_confirm"];
      $algoritmo = PASSWORD_DEFAULT;
      $hash2 = password_hash($password2, $algoritmo);
      $_SESSION["senha_confirm"] = $hash2 ;
    }
    if (isset($_POST["email"])){
			$_SESSION["email"] = $_POST["email"];
    }
    if (isset($_POST["email_confirm"])){
			$_SESSION["email_confirm"] = $_POST["email_confirm"];
    }
    if (isset($_POST["nacionalidade"])){
			$_SESSION["nacionalidade"] = $_POST["nacionalidade"];
    }
		if (isset($_POST["genero"])){
			$_SESSION["genero"] = $_POST["genero"];
		}
    if (isset($_POST["fnac_dia"])){
			$_SESSION["fnac_dia"] = $_POST["fnac_dia"];
	  }
    if (isset($_POST["fnac_mes"])){
			$_SESSION["fnac_mes"] = $_POST["fnac_mes"];
	  }
    if (isset($_POST["fnac_ano"])){
			$_SESSION["fnac_ano"] = $_POST["fnac_ano"];
    }
		if (isset($_POST["termos"])){
			$_SESSION["termos"] = $_POST["termos"];
    }
	} else {
		$validacao = false;
		$_SESSION["nome"] = null;
		$_SESSION["sobrenome"] = null;
		$_SESSION["usuario"] = null;
		$_SESSION["email"] = null;
    $_SESSION["email_confirm"] = null;
		$_SESSION["genero"] = null;
    $_SESSION["senha"] = null;
    $_SESSION["senha_confirm"] = null;
    $_SESSION["nacionalidade"] = null;
    $_SESSION["fnac_dia"] = null;
    $_SESSION["fnac_mes"] = null;
    $_SESSION["fnac_ano"] = null;
    $_SESSION["termos"] = null;
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
  <?php
     include ("head.php");
  ?>
</head>

<body>
  <?php
		if (isset($_SESSION["name"]) && $_POST) {echo " | Bem vindo " .$_SESSION["name"] ;}
	?>

  <header>
      <?php
       include ("header.php");
      ?>
  </header>

	<!-- Cadastro -->
  <div class="container">
	          <div class="row">
	            <div class="c-widget__header col-12">
	                <h1 class="text-center" >
										<?php echo $titulo;?>
	                </h1>
									<h2 class="text-center" color=Red >
										<?php
												if ($validacao) {echo "Preenchimento completo!" ;}
												else { echo "Preencha corretamente todos os dados... "; }
										?>
	                </h2>

	            </div>
	          </div>
	        </div>

  <div class="container">

  	<div class="row userbox">

			<form role="form" action="cadastro.php" method="post" enctype="multipart/form-data">

        <div class="row">
					<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-1">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" value="<?php if(isset($_SESSION["nome"])) {echo $_SESSION["nome"];} ?>" placeholder="Insira Nome ">
					</div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-1">
						<label for="sobrenome">Sobrenome</label>
						<input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?php if(isset($_SESSION["sobrenome"])) {echo $_SESSION["sobrenome"];} ?>" placeholder="Insira seu sobrenome">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-1">
						<label for="username">Nome de usuário</label>
						<input type="text" class="form-control" id="usuario" name="usuario" value="<?php if(isset($_SESSION["usuario"])) {echo $_SESSION["usuario"];} ?>" placeholder="Insira um nome de usuário">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-1">
						<label for="email">E-mail</label>
						<input type="text" class="form-control" id="email" name="email" value="<?php if(isset($_SESSION["email"])) {echo $_SESSION["email"];} ?>" placeholder="Insira um e-mail">
					</div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-1">
						<label for="email-confirm">Confirmar e-mail</label>
            <input type="text" class="form-control" id="email_confirm" name="email_confirm" value="<?php if(isset($_SESSION["email_confirm"])) {echo $_SESSION["email_confirm"];} ?>" placeholder="Confirme seu e-mail">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-1">
						<label for="senha">Senha</label>
						<input type="password" class="form-control" id="senha" name="senha" value="<?php if(isset($_SESSION["senha"])) {echo $_SESSION["senha"];} ?>" placeholder="Insira uma senha">
					</div>
					<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-1">
						<label for="senha-confirm">Confirmar senha</label>
            <input type="password" class="form-control" id="senha-confirm" name="senha_confirm" value="<?php if(isset($_SESSION["senha_confirm"])) {echo $_SESSION["senha_confirm"];} ?>" placeholder="Confirme sua senha">
					</div>
				</div>

				<div class="row">
				   <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-1">
				    	<label>Gênero</label>
					    <div>
						     <label class="radio-inline">
							   		<input type="radio" name="genero" id="genero_masculino" value="Masculino" <?php if($_SESSION["genero"]==="Masculino"){echo " checked";} ?>> Masculino
							 	</label>
								<label class="radio-inline">
										<input type="radio" name="genero" id="genero_feminino" value="Feminino" <?php if($_SESSION["genero"]==="Feminino"){echo " checked";} ?>> Feminino
								</label>
							</div>
						</div>
						<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-1">
									<label for="nacionalidade">Nacionalidade</label>
									<select class="form-control" name="nacionalidade" id="nacionalidade">
													<?php foreach ($array_paises as $key => $value) : ?>
                              <option value="<?php echo $value ?>" <?php if($_SESSION["nacionalidade"]===$value){echo " selected";} ?>><?php echo $value; ?></option>
													<?php endforeach; ?>
									</select>
						</div>
				</div>

				<div class="form-group">
					<label> Data de nascimento</label>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-1">
							<select class="form-control" name="fnac_dia">
								<?php for ($i=1; $i <= 31 ; $i++) : ?>
									<option value="<?php echo $i ?>" <?php if($_SESSION["fnac_dia"]==="$i"){echo " selected";} ?>><?php echo $i; ?></option>
								<?php endfor; ?>
							</select>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-1">
							<select class="form-control" name="fnac_mes">
								<?php for ($i=1; $i <= 12 ; $i++) : ?>
									<option value="<?php echo $i ?>" <?php if($_SESSION["fnac_mes"]==="$i"){echo " selected";} ?>><?php echo $i; ?></option>
								<?php endfor; ?>
							</select>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-1">
							<select class="form-control" name="fnac_ano">
								<?php for ($i=2018; $i >= 1960 ; $i--) : ?>
									<option value="<?php echo $i ?>" <?php if($_SESSION["fnac_ano"]==="$i"){echo " selected";} ?>><?php echo $i; ?></option>
								<?php endfor; ?>
							</select>
						</div>
					</div>
				</div>

				<div class="checkbox">
					<label>
						<input type="checkbox" id="chk-termos" name="termos" value="1" <?php if($_SESSION["termos"]==="1"){echo " checked";} ?>> Aceito os termos e condições
					</label>
				</div>

        <input type="submit" name="btn_submit" class="btn btn-info" value="Inscrever-me"/>

			</form>
		</div>

	</div>

  <footer>
  <?php
     include ("footer.php");
  ?>
  </footer>

</body>
</html>
