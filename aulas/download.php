<!DOCTYPE html>
<!--Aula-19 19-6-2018-->
<!--download.php -->
<!--http://localhost:8080/teste/-->

<html>
    <body>
        <?php
            $a = "Aula-19 - download.php";

            // Exercício 2: Criar dois arquivos chamados upload.php​ e download.php
            // a. upload.php​ deve ter um botão que permite fazer upload de um arquivo no servidor pelo método POST
            //    e salvá-lo em um diretório chamado “uploads​”. Caso já exista um arquivo com o mesmo nome no diretório,
            //    é necessário mostrar uma mensagem de erro.
            //  b. download.php​ deve mostrar um link de download do arquivo carregado pelo usuário
            //  (Usar o atributo download​ da tag <a>).

              $filename  = $_GET["filename"];
              $directory = $_GET["directory"];
              if ( file_exists($directory.$filename)) {
                echo "O arquivo => $directory $filename está disponível para  !";
              }
              echo "<a href='$directory$filename' downloads='$directory$filename'> Download </a>";

        ?>
        <pre>
            <?php
               var_dump($a);
            ?>
        </pre>
    </body>
</html>
