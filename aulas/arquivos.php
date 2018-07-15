<!DOCTYPE html>
<!--Aula-18 18-6-2018-->
<!--arquivos.php -->
<!--http://localhost:8080/teste/-->

<html>
    <body>
        <?php

          // Criar um arquivo novo chamado arquivos.php​.
          // a. Criar uma função que verifique se existe um arquivo chamado texto.txt​ no
          //    mesmo diretório de arquivos.php​. Se o arquivo existir, deve ser aberto com
          //    direitos de leitura e escrita, para que seja possível adicionar informações. Se
          //    ele não existir, deve ser criado com direitos de leitura e escrita.
          echo "Exercicío a: ";
          $arquivo = "dados.txt";
          if (file_exists($arquivo)) {
             echo "O arquivo $arquivo existe";
          } else {
             echo "O arquivo $arquivo não existe";
          }
          echo "<br>";

          // b. A frase “Olá mundo! testando.” deve ser escrita 100 vezes no arquivo, 1 vez
          //    por linha. Depois disso, o arquivo deve ser fechado.
          $frase = "Olá mundo! testando.\n";
          file_put_contents($arquivo, $frase);
          $stop = 10;
          $fp = fopen($arquivo, 'w');
          for ($i = 0; $i < $stop; $i++) {
              fwrite($fp, $frase);
          }
          fclose($fp);

          // c. Mostrar o conteúdo do arquivo texto.txt​, lendo todo o arquivo de uma vez.
          echo "<br>";
          echo "Exercicío c: ";
          $texto = file_get_contents($arquivo);
          echo $texto;
        ?>

        <pre>
          <?php
          // d. Mostrar o conteúdo do arquivo texto.txt​, lendo linha por linha.
           $gestor = fopen("dados.txt", "r");
           if ($gestor) {
               while (($linha = fgets($gestor)) !== false) {
                   echo $linha;
               }
           }
           fclose($gestor);

           ?>
        </pre>
    </body>
</html>
