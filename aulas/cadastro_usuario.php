<?php
    require('Classes\ConexaoDB.php');
    require('Classes\Verifica_Usuario.php');

    if ($_POST) {    

        $validacao = true;
        $username = $_POST ["username"];
        $email = $_POST ["email"];
        $senha = $_POST ["senha"];

        if (empty($username) || empty($email) || empty($senha)) {
            $validacao = false;
            echo "<h3><font color = red>Todos os campos sao obrigatorios!</font></h3><br>";
        }

        $sql = "SELECT username from users WHERE username = '$username'";
        // ConexaoDB($host, $db_name, $db_user, $db_password, $sql)
        $conexao = new ConexaoDB("localhost","digitalhouse_db","root","a123456!",$sql);
        $results = $conexao->conectar();

        $verifica_cadastro = new Verifica_Usuario($results, $validacao, $username, $email, $senha);
        $validacao = $verifica_cadastro->cadastro();

        if ($validacao) {
            echo "<h3><font color = blue>Cadastro efetuado com sucesso!!! Faça login na pagina inicial!</font></h3>";
            echo "<a href='index.php'>Voltar para Pagina Inicial</a>";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>Cadastro de Usuários</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Cadastro de Usuários">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
        </header>                 
        <form action="cadastro_usuario.php" method="post">
            <span></span><br><p></p>
            <div>
                <label>username</label>
                <input type="text" name="username" value= "<?php if (isset($username)) { echo $username; } ?>" required placeholder="Informe seu username">                            
            </div>
            <br>
            <div>
                <label>E-mail</label>
                <input type="email" name="email" value="<?php if (isset($email)) { echo $email; } ?>" required placeholder="Insira um e-mail">                       
            </div>
            <br>
            <div>
                <label>Senha</label>
                <input type="password" name="senha" value="<?php if (isset($senha)) { echo $senha; } ?>" required placeholder="Insira uma senha">                        
            </div>
            <br><p></p>
            <button class="btn btn-primary" type="submit">Cadastrar</button>
        </form>
    </body>
</html>