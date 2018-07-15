<!DOCTYPE html>
<!--Aula-15 11-6-2018-->
<!--area.php -->
<!--http://localhost:8080/teste/-->
<?php

    // Exercício-2: Gerar um arquivo chamado area.php​:

    // Exercício-2: a. Definir uma função triangulo() que retorne sua área.
    function triangulo($base,$altura) {
        $area = $base * $altura / 2;
        return $area;
    }
    // Exercício-2: b. Definir uma função retangulo() que retorne sua área.
    function retangulo($base,$altura) {
        $area = $base * $altura ;
        return $area;
    }

    // Exercício-2: c. Definir uma função quadrado() que retorne sua área.
    function quadrado($base) {
          $area = pow ( $base , 2 );
          return $area;
    }

    // Exercício-2: d. Utilizando a função pi(), definir uma função circulo() que retorne sua área.
    function circulo($raio) {
          $area = pow ( 2 * pi() * $raio , 2 );
          return $area;
    }


?>
