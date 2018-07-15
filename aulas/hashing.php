<!DOCTYPE html>
<!--Aula-19 19-6-2018-->
<!--hashing.php -->
<!--http://localhost:8080/teste/-->

<html>
    <body>
        <?php
            $space = " ";

            // Exercício 1: Criar um novo arquivo PHP.
            // a. Criar uma função que defina uma variável do tipo string e faça echo dessa variável.
            echo "<br>";
            echo "Exercício-1 a: ";
            $a = "Aula19";
            function hashing($a=null) {
              echo "aula = $a ";
              return true;
            }
            hashing($a);
            echo "<br>";

            // b. Adicionar à função um echo do resultado de criptografar a variável com
            //    password_hash, utilizando como algoritmo: PASSWORD_DEFAULT.
            echo "<br>";
            echo "Exercício-1 b: ";
            $password = "a123456!";
            $algoritmo1 = PASSWORD_DEFAULT;
            $hash1 = password_hash($password, $algoritmo1);
            echo "senha = $password | algorítmo DEFAULT | hash1 = $hash1 | ";
            if (password_verify($password, $hash1)) { echo "password_verify é true"; } else { echo "password_verify é false"; }
            echo "<br>";

            // c. Adicionar à função um echo do resultado de criptografar a variável com password_hash,
            //    utilizando como algoritmo: PASSWORD_BCRYPT.
            echo "<br>";
            echo "Exercício-1 c: ";
            $algoritmo2 = PASSWORD_BCRYPT;
            $hash2 = password_hash($password, $algoritmo2);
            echo "senha = $password | algorítmo BCRYPT | hash2 = $hash2 | ";
            if (password_verify($password, $hash2)) { echo "password_verify é true"; } else { echo "password_verify é false"; }
            echo "<br>";

            // d. Adicionar à função um echo do resultado de criptografar a variável com a função md5.
            echo "<br>";
            echo "Exercício-1 d: ";
            $hash3 = md5($password);
            echo "senha = $password | algorítmo MD5 | hash3 = $hash3 | ";
            // não há como verificar com MD5
            echo "<br>";

            // e. Adicionar à função um echo do resultado de criptografar a variável com a função sha1.
            echo "<br>";
            echo "Exercício-1 e: ";
            $hash4 = sha1($password);
            echo "senha = $password | algorítmo SHA1 | hash4 = $hash4 | ";
            // não há como verificar com SHA1
            echo "<br>";
        ?>
        <pre>
            <?php
               var_dump($a);
           ?>
        </pre>
    </body>
</html>
