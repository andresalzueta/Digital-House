
<pre>
<?php
// 3. Criar um array numérico com 5 strings de animais diferentes. Em seguida, executar um var_dump
// para ver os resultados.
// a. Adicionar mais 2 animais ao final do array e executar outro var_dump para ver os
// resultados.
// b. Substituir o primeiro animal por outro novo e imprimir o resultado.
// c. Adicionar um animal novo na posição 100 e imprimir o resultado.
// d. Adicionar um animal novo na posição 16 e imprimir o resultado.

$Array=[];
$Array[0]="Leão";
$Array[1]="Touro";
$Array[2]="Cavalo";
$Array[3]="Leopardo";
$Array[4]="Jacaré";
$Array[]="Puma";
$Array[]="Elefante";
$Array[1]="Cabra";
$Array[16]="Girafa";
$Array[100]="Veado";

var_dump($Array);



?>
</pre>