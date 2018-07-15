<!DOCTYPE html>
<!--Aula-20 21-6-2018-->
<!--upload.php -->
<!--http://localhost:8080/teste/-->


<html>
    <body>
        <?php
            $a = "Aula-20 - contador.php";
            // Exercício 2:  Criar o arquivo contador.php​:
            // a. Crie uma $_SESSION[“contador”] que inicie com 0.
            // Start the session
            session_start();
            // Set session variables
            if ($_POST) {
            	$validacao = true;
              if (isset($_POST["v_aumentar"])){
                $_SESSION["contador"] ++;
              }
              if (isset($_POST["v_diminuir"])){
                $_SESSION["contador"] --;
              }
              if (isset($_POST["v_reiniciar"])){
                 $_SESSION["contador"] = 0 ;
              }

            } else {
              $validacao = false;
              $_SESSION["contador"] = 0;
            }

            echo "<br>";
            echo "Exercício-1 ";
            echo "Variáveis de sessão iniciadas. Contador = ".$_SESSION["contador"];
            echo "<br>";
            echo "<br>";
            // b. Adicione 2 botões. O primeiro deve dizer “Aumentar”, e deve aumentar o valor em 1.
            // O segundo deve dizer “Reiniciar” e deve colocar $_SESSION[“contador”] em 0. Testar as modificações.


        ?>

        <form role="form" action="contador.php" method="post" enctype="multipart/form-data">
            <button type="submit" name="v_aumentar">Aumentar</button>
            <button type="submit" name="v_diminuir">Diminuir</button>
            <button type="submit" name="v_reiniciar" >Reiniciar</button>
        </form>

        <pre>
           <?php
               var_dump($a);
           ?>
        </pre>
    </body>
</html>
