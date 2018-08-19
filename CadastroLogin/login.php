<?php 
    require('Classes\ConexaoDB.php');
    require('Classes\Verifica_Login.php');


    if ($_POST){

        $username = $_POST['username'];
        $senha = $_POST['senha'];
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $conexao = new ConexaoDB("localhost","digitalhouse_db","root","a123456!",$sql);
        $results = $conexao->conectar();
        $verifica_login = new Verifica_Login($username, $senha, $results);
        $verifica_login->login();
    }
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Login com PDO e OO">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <form method="post" action="login.php">
            <br><p></p>
            <div>
                <label>E-mail</label>
                <input type="username" name="username" required placeholder="Informe seu e-mail aqui">                    
            </div>
            <br>
            <div>
                <label>Senha</label>
                <input type="password" name="senha" required placeholder="Digite sua senha">
            </div>
            <br><p></p>
            <button type="submit" class="btn btn-primary">Acessar</button>                                        
        </form>            
    </body>
</html>