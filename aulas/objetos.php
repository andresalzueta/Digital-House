<!DOCTYPE html>
<!--Aula-29 17-7-2018-->
<!--objetos.php -->
<!--Objetos   -->
<?php
    require("classes.php");
        
    echo "<br>";
    // $real é um objeto a partir da classe Moeda()
    $real = new Moeda();
    $real->quantia = 100;
    $real->simbolo = "R$";
    echo "Moeda real = " .$real->simbolo . PHP_EOL;
    echo "<br>";

    echo "<br>";
    // $dolar é um objeto a partir da classe Moeda()
    $dolar = new Moeda();
    $dolar->quantia = null;
    $dolar->simbolo = "US$";
    echo "Moeda dolar = " .$dolar->simbolo . PHP_EOL;
    echo "<br>";

    // $euro é um objeto a partir da classe Moeda()
    $euro = new Moeda();
    $euro->quantia = null;
    $euro->simbolo = "E$";
    echo "Moeda euro = " .$euro->simbolo . PHP_EOL;
    echo "<br>";


    // $conversao  é um objeto a partir da classe Cambio()
    $conversao = new ConverteMoeda();
    echo "Conversão => " .$real->simbolo ." ".$conversao->f_converte($real,3.8) . PHP_EOL;
    echo "<br>";

    echo "<br>";
    
    var_dump($conversao);
    echo "<br>";
    
?>