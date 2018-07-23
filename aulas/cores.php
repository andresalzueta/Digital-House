<!DOCTYPE html>
<!--Aula-20 21-6-2018-->
<!--cores.php -->
<!--http://localhost:8080/teste/-->

<?php
    $titulo = "Aula-20 - Cores.php";
    // Exercício 2:  Criar o arquivo cores.php​:
    //     Criar um arquivo que mostre ao usuário um formulário com cores para escolher
    // (podemos usar um select​ para isso). Quando o usuário seleciona uma cor, a página
    // deve recarregar com o fundo da cor escolhida.Quando o usuário fecha o navegador
    // e volta a abrir a página, o fundo deve estar da cor escolhida anteriormente.
    // Start the session
    session_start();
    // Set session variables
    if ($_POST) {
      $validacao = true;
      if (isset($_POST["v_cor"])){
        $_SESSION["v_cor"] = $_POST["v_cor"];
      }
    } else {
      $validacao = false;
      $_SESSION["v_cor"] = "white";
      $cor = true;
    }
?>

<html>
      <html lang="en">
      <head>
        	<meta charset="utf-8">
      </head>
      <body bgcolor="<?php echo $_SESSION["v_cor"]; ?>">
         <?php
            echo $titulo;
            echo "<br>";
          echo "Exercício-2 ";
          echo "Variáveis de sessão iniciadas. Cor = ".$_SESSION["v_cor"];
          echo "<br>";
          echo "<br>";
          ?>

        	<div>
        		<?php echo "Selecione a cor... " ?>
      			<form role="form" action="cores.php" method="post" enctype="multipart/form-data">
                <select name="v_cor">
                    <option value="white" <?php if($_SESSION["v_cor"]==="white"){echo "selected";}?>>Branca</option>
                    <option value="red" <?php if($_SESSION["v_cor"]==="red"){echo "selected";}?>>Vermelha</option>
                    <option value="yellow" <?php if($_SESSION["v_cor"]==="yellow"){echo "selected";}?>>Amarela</option>
                    <option value="gray" <?php if($_SESSION["v_cor"]==="gray"){echo "selected";}?>>Cinza</option>
                </select>
              <input type="submit"  value="Escolher cor"/>
        			</form>
        		</div>
    </body>
</html>
