<?php 
    require('Classes\ConexaoDB.php');
    require('Classes\Verifica_Login.php');


    if ($_POST){
        $username = $_POST['username'];
        $senha = $_POST['senha'];
        $sql = "SELECT * FROM users WHERE username = '$username'";
        // ConexaoDB($host, $db_name, $db_user, $db_password, $sql){
        $conexao = new ConexaoDB('localhost','digitalhouse_db','root','a123456!',$sql);
        $results = $conexao->conectar();
        $verifica_login = new Verifica_Login($username, $senha, $results);
        $verifica_login->login();
        header('location:index.php');
    }
?>

<!DOCTYPE html>

<html lang="pt">
    <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Login</title>
	    <meta name="description" content="Login com PDO">
	    <!-- Bootstrap -->
    	<link href="assets/libs/bootstrap-3/css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

    <body id="LoginForm">
        <div class="container">
            <h1 class="form-heading">Formulário de Login</h1>
            <div class="login-form">
                <div class="main-div">
                    <div class="panel">
                    <h2>Login de Usuário</h2>
                    <p>Ingresse seu Nome de Usuário e senha</p>
                </div>
                <form id="Login" method="post" action="login.php">
                    <div class="row">
					    <div class="form-group col-sm-6">
						    <label for="username">Nome de usuário</label>
						    <input type="text" class="form-control" id="username" name="username" value="<?php if(isset($_SESSION['username'])) {echo $_SESSION['username'];} ?>" placeholder="Insira um nome de usuário">
					    </div>
                    </div>
                    <div class="row">
					    <div class="form-group col-sm-6">
						    <label for="senha">Senha</label>
						    <input type="password" class="form-control" id="senha" name="senha" value="<?php if(isset($_SESSION['senha'])) {echo $_SESSION['senha'];} ?>" placeholder="Insira uma senha">
					    </div>
                    </div>
                    <div class="forgot">
                        <a href="reset.html">Esqueceu a senha ?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form> 
            </div>
            <p class="botto-text"> Designed by Quarteto Fantástico</p>
        </div>
    </body>
</html>
