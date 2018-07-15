<!DOCTYPE html>
<!--Aula-15 11-6-2018-->
<!--functions.php -->
<!--http://localhost:8080/teste/-->
<?php

$var = 1; //âmbito global

  //Exercício-1:
  // a.Definir uma função maior() que receba 3 números e retorne o maior deles.
  function maior($a,$b,$c=null) {
    global $funcoesExecutadas;
    $funcoesExecutadas++;
    // d.Modificar maior() de forma que, se receber apenas 2 parâmetros, a função compare esses dois números com numeroMagico
    if ($c == null) {
      global $numeroMagico;
      $c = $numeroMagico;
    }
    $maior = max ($a,$b,$c);
    return $maior;
  }

  // b. Definir uma função tabela() que receba um parâmetro base, um parâmetro limite,
  // e retorne um array com a sequência de números a partir do número base até o número limite.
  function tabela($a,$b=null) {
      global $funcoesExecutadas;
      $funcoesExecutadas++;
      $array1 = [];
      if ($b == null) {
        global $numeroMagico;
        $b = $numeroMagico;
      }
      $i = $a;
      while ($i < $b) {
          array_push($array1,$i);
          $i++;
      }
      return $array1;
  }


  // e. Modificar tabela de forma que, se a receber apenas um parâmetro, a função use numeroMagico como limite


?>
