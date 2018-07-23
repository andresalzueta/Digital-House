<!DOCTYPE html>
<!--Projeto Integrador | Editado em 01-7-2018 por Andrés Alzueta-->
<!--login.php -->
<!--http://localhost:8080/Digital-House/Loja_QFDH/login.php-->

<?php
	$titulo = "Formulário de Login";

	session_start();
	// Set session variables
	if ($_POST) {
		$validacao = true;

		if (isset($_POST["usuario"])){
			$_SESSION["usuario"] = $_POST["usuario"];
		}
		if (isset($_POST["senha"])){
			$password1 = $_POST["senha"];
			$algoritmo = PASSWORD_DEFAULT;
			$hash1 = password_hash($password1, $algoritmo);
			$_SESSION["senha"] = $hash1 ;
		}
  	if (isset($_POST["login_status"])){
			$_SESSION["login_status"] = $_POST["login_status"];
    }
	} else {
		$validacao = false;
		$_SESSION["usuario"] = null;
    $_SESSION["senha"] = null;
    $_SESSION["login_status"] = null;
	}
?>

<html>
    <head>
        <?php
           include ("head.php");
        ?>
    </head>
    <body>
        <?php
    		    if (isset($_SESSION["usuario"]) && $_POST) {echo " | Bem vindo " .$_SESSION["usuario"] ;}
  	    ?>

        <Header>
            <?php
             include ("header.php");
            ?>
        </Header>
        <br>
        <br>

        <!-- Login -->
        <div class="container">
            <div class="row">
              <div class="c-widget__header col-12" >
                <h1 class="text-center" >
                  <p class="font-weight-light">Bem-vindo à QF & DH.</p>
                </h1>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="userBox center-block">
                  <form role="form" action="login.php" method="post" enctype="multipart/form-data">
                      <br>
                      <label> Nome de Usuário
                         <br><input type="text" class="userBordas form-control" id="usuario" name="usuario" value="<?php if(isset($_SESSION["usuario"])) {echo $_SESSION["usuario"];} ?>" placeholder="Insira um nome de usuário"><br>
                      </label>
                      <br>
                      <label> Senha
                         <br><input type="password" class="userBordas form-control" id="senha" name="senha" value="<?php if(isset($_SESSION["senha"])) {echo $_SESSION["senha"];} ?>" placeholder="Insira sua senha"><br>
                      </label>
                      <br>
                      <label>
                         <input type="checkbox" id="login_status" name="login_status" value="1" <?php if($_SESSION["login_status"]==="1"){echo " checked";} ?>> Me mantenha logado.
                      </label>
                      <br><br>
                      <button class="btn btn-info" type="submit">Enviar</button>

                  </form>
                  <br><br>
                  <p>Esqueci minha senha, <a href="login.php">clique aqui.</a></p>
              </div> <!-- <div class="loginBox center-block">-->
            </div> <!-- </div colunas>-->
            <br><br>
            <div class="row">
                <div class="c-widget__header col-12">
                  <div class="text-center" >
                      <a  href="index.html">Voltar Home</a>
                  </div>
                </div>
            </div>
        </div> <!-- </div container>-->
        <br><br>

        <footer>
        <?php
           include ("footer.php");
        ?>
        </footer>
    </body>
</html>
