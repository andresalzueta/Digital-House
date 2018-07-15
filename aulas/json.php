<!DOCTYPE html>
<!--Aula-18 18-6-2018-->
<!--JSON.php -->
<!--http://localhost:8080/teste/-->

<html>
    <body>
        <?php
            $space = " ";

            // Exercício 1;Criar uma variável $a contendo um array ( 'a'=>1, 'b'=>2, 'c'=>'Eu <3 JSON'):
            $a = "a => 1";
            $b = "b => 2";
            $c = "Eu < JSON";
            // a. Fazer echo da variável $a.
            $meuarray = [$a,$b,$c];
            echo "a = $a , b = $b , c= $c , <br>";
            echo "<br>";
            var_dump($meuarray);
            echo "<br>";

            // b. Utilizando json_encode, transformar o array em um json e atribuí-lo a $a.
            json_encode($meuarray);
            $a = json_encode($meuarray);
            $json =  json_encode($meuarray);
            // c. Fazer echo da variável $a.
            echo "<br>";
            echo "Novo a = $a ";
            echo "<br>";
            // d. Criar uma nova variável $b contendo o json_decode da variável $a.
            $b = json_decode($a);
            // e. Fazer echo de $b.
            echo "<br>";
            echo "Novo b = $b ";
            echo "<br>";
            var_dump($b);
            echo "<br>";
            // f. Imprimir a frase “Eu <3 JSON | 1 | 2 |” utilizando os dados da variável $b.
            echo "<br>";
            echo $b[2] ;
            echo "<br>";

        ?>
        <pre>
            <?php
               var_dump($json);
           ?>
        </pre>
    </body>
</html>
