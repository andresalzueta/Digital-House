<?php
    require('Classes\ConexaoDB.php');
    require('Classes\Verifica_Login.php');

    $logado = false;
    session_start();    
    if(isset($_SESSION['logado'])){
        $username = $_SESSION['username'];
        $userid = $_SESSION['userid'];
        $nome = $_SESSION['nome'];
        $logado = $_SESSION['logado'];
    }

    if(isset($_POST['encerrar'])){
        // Crio o novo objeto sem dados, pois so preciso da funcao que encerra a sessao
        $verifica_login = new Verifica_Login("", "", "");
        $verifica_login->encerraSessao();                
        header('location:index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minha conta</title>
</head>
<body>
    <div>
        <label>
            <h3>
                <?php if($logado){ ?>
                    Seja bem vindo <font color = blue><?php echo $nome . " (".$username .")" ?></font>
                <?php } else{ ?>
                    <font color = red> Voce nao esta logado! Volte para a pagina inicial e faça login </font>
                <?php } ?>
            </h3>
        </label>
        <br><p></p>
        <a href="index.php">Voltar para a pagina inicial</a>
        <br><p></p>
        <font color = red>
            <?php if($logado){ ?>
                <form action="minha_conta.php" method="post">
                    <label>
                        Encerrar Sessao e Voltar para pagina inicial
                    </label>                    
                    <input type="hidden" name="encerrar">
                    <input type="submit" value="Encerrar">
                </form>               
            <?php } ?>    
        </font>      

    </div>

</body>
</html>