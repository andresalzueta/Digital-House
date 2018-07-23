<!DOCTYPE html>
<!--Aula-19 19-6-2018-->
<!--upload.php -->
<!--http://localhost:8080/teste/-->


<html>
    <body>
        <?php
            $a = "Aula-19 - upload.php";
            // Exercício 2: Criar dois arquivos chamados upload.php​ e download.php
            // a. upload.php​ deve ter um botão que permite fazer upload de um arquivo no servidor pelo método POST
            //    e salvá-lo em um diretório chamado “uploads​”. Caso já exista um arquivo com o mesmo nome no diretório,
            //    é necessário mostrar uma mensagem de erro.
            //  b. download.php​ deve mostrar um link de download do arquivo carregado pelo usuário
            //  (Usar o atributo download​ da tag <a>).
            if ($_FILES) {
          		$validacao = false;
              $error = $_FILES["filename"]["error"];
              $filename = $_FILES["filename"]["name"];
              $arquivo_tmp = $_FILES["filename"]["tmp_name"];
              $directory = "uploads/";
              $fullpath =  dirname(__FILE__)."/uploads/";
          		if ( file_exists($fullpath.$filename)) {
          			echo "O arquivo => $fullpath.$filename já existe !";
          		} elseif ($error == UPLOAD_ERR_OK) {
                move_uploaded_file($arquivo_tmp, $fullpath.$filename);
                $validacao = true;
                echo " Upload do Arquivo => $fullpath.$filename realizado com sucesso !";
          		}

          		if ($validacao) {
                header("Location:download.php?directory=$directory&filename=$filename");
          			exit;
          		}
            }



        ?>

			  <form role="form" action="upload.php" method="post" enctype="multipart/form-data">
            <br><br>
            Arquivo: <input type="file" name="filename">
            <br><br>
            <input type="submit" value="Upload">
        </form>


        <pre>
            <?php
               var_dump($a);
           ?>
        </pre>
    </body>
</html>
