<pre>
<?php

// 7. Definir um array​ com 10 números aleatórios entre 0 e 10. Percorrer esse array para imprimir todos os
// números. A execução deve terminar se algum dos números encontrados for 5 (a mensagem impressa
// deve ser “Encontramos um 5!”).
// c. Resolver este problema com um do/while​

echo "<br>";
echo "<br>";
echo "Ex7c";
echo "<br>";

$arrayNumeros4 = [1, 3, 8, 10, 6, 5, 2, 7, 4, 0,];
$i4=0;
do{echo "O valor do i é: $arrayNumeros4[$i4] <br>";
  $i4++;
    if($arrayNumeros4[$i4] === 5){
    echo  "Encontramos um 5!<br>"; break;
    }
}
      while($i4 < ($arrayNumeros4));





?>
</pre>
