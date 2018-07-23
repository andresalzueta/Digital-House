<!DOCTYPE html>
<!--Aula-28 12-7-2018-->
<!--objetos.php -->
<?php
    require("classes.php");

    $andres = new Pessoa();
    $andres->cor_dos_olhos = "castanhos";
    $andres->altura = 1.78;
    $andres->peso = 80;
    $andres->genero = "Masculino";
    $andres->descrever();
    echo "<br>";
    $andres->pesoideal();
    echo "<br>";
    
    echo "<br>";
    $meuRetangulo = new Retangulo();
    $meuRetangulo->base = 30;
    $meuRetangulo->altura = 50;
    echo "Area = " .$meuRetangulo->area();
    echo "<br>";

    echo "<br>";
    $moeda = new Cambio();
    $moeda->dolar = 100;
    $moeda->taxa_cambio = 3.8;
    echo "US$ " .$moeda->dolar ." = R$ " .$moeda->converte();
    echo "<br>";


?>