<pre>
<?php
// 5. Declarar a variável $inteiro e $decimal, com os respectivos valores.
// a. Executar um echo com a soma dos dois valores.
// b. Executar um echo com a subtração dos dois valores.
// c. Executar um echo com a divisão dos dois valores.
// d. Executar um echo com a multiplicação dos dois valores.
// e. Atribuir a uma nova variável o resto da divisão dos valores e mostrar a nova variável.
// f. Adicionar 1 a $inteiro e $decimal.
// g. Adicionar 5 a $inteiro e subtrair 0,6 de $decimal.
// h. Na mesma linha, criar a variável $resultado, cujo valor seja o resultado da multiplicação
// $inteiro * 2, adicionar $decimal e dividir tudo pela metade de $inteiro.

$inteiro="10";
$decimal="10.5";

echo $decimal + $inteiro;

echo "<br>";

echo $decimal - $inteiro;

echo "<br>";

echo $decimal / $inteiro;

echo "<br>";

echo $decimal * $inteiro;

echo "<br>";

$resto = $decimal % $inteiro;
echo $resto;

echo "<br>";

$adicionar = 1;
echo $decimal + $adicionar;
echo "<br>";
echo $inteiro + $adicionar;
echo "<br>";


$adicionar5 = 5;
$subtrair06 = 0.6;
echo $decimal + $adicionar5;
echo "<br>";
echo $decimal - $subtrair06;


echo "<br>";
$resultado = $inteiro * 2 + $decimal / ($inteiro / 2);
echo $resultado;

?>
</pre>
