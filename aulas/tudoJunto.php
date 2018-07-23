<!DOCTYPE html>
<!--Aula-15 11-6-2018-->
<!--tudoJunto.php -->
<!--http://localhost:8080/teste/-->
<?php
  echo "<br>";
  require_once("functions.php");
  require_once("area.php");
  // Criar uma arquivo tudoJunto.php​ que inclua o arquivo funcoes.php​ e area.php,​
  // definindo uma função que receberá os raios de 3 círculos e retornará a maior superfície entre ambos.
  // Para este exercício, devemos reutilizar as funções já definidas.
  function tudoJunto($a,$b,$c) {
    // ao definir $c=null o argumento passa a ser nulo quando não é passado.
    return maior(circulo($a),circulo($b),circulo($c));
  }
?>
