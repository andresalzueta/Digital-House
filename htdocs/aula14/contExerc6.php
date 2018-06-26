
<?php
echo "<br>";
echo "<br>";
echo "Ex6b";
echo "<br>";
$arrayNomes = ["thomaz", "ana", "matheus", "jose", "maria"];
$i = 0;   while ($i < count($arrayNomes))
 {     echo $arrayNomes[$i];     $i++;   }

 echo "<br>";
 echo "<br>";
 echo "Ex6c";
 echo "<br>";

 $arrayNomes = ["thomaz", "ana", "matheus", "jose", "maria"];
 $i = 0;
 do {echo $arrayNomes[$i];
$i++;
} while ($i < count($arrayNomes));



echo "<br>";
echo "<br>";
echo "Ex7a";
echo "<br>";

// 7. Definir um array​ com 10 números aleatórios entre 0 e 10. Percorrer esse array para imprimir todos os
// números. A execução deve terminar se algum dos números encontrados for 5 (a mensagem impressa
// deve ser “Encontramos um 5!”).
// a. Resolver este problema com um for​.
// b. Resolver este problema com um while​.
// c. Resolver este problema com um do/while​

$arrayNumeros = [1, 3, 8, 10, 6, 5, 2, 7, 4, 0,];
for ($i = 0; $i < count($arrayNumeros);$i++){
    if ($arrayNumeros[$i] === 5){
      echo "Encontramos um 5!<br>";break;
    }else{
      echo "O valor do i é: $arrayNumeros[$i] <br>";
      }
}

// do jeito abaixo também está certo usando random 
// for ($i = 0; $i < 10; $i++){
//     $numero = rand(0 ,10);
//     if ($numero === 5){
//       echo "Encontramos um 5!<br>";break;
//     }else{
//       echo "O valor encontrado $numero <br>";
//       }
// }

echo "<br>";
echo "<br>";
echo "Ex7b";
echo "<br>";

$arrayNumeros2 = [1, 3, 8, 10, 6, 5, 2, 7, 4, 0,];
$i3=0;
while($i3 < count($arrayNumeros2)){
  $arrayNumeros2[$i3];
  $i3++;
  if($arrayNumeros2[$i3] === 5){
  echo  "Encontramos um 5!<br>"; break;
  }
    else{
      echo "O valor do i é: $arrayNumeros2[$i3] <br>";
    }
}


echo "<br>";
echo "<br>";
echo "Ex7c";
echo "<br>";

$arrayNumeros4 = [1, 3, 8, 10, 6, 5, 2, 7, 4, 0,];
$i4=0;
do{echo "O valor do i é: $arrayNumeros[$i4] <br>";
  $i4++;
    if($arrayNumeros4[$i4] === 5){
    echo  "Encontramos um 5!<br>"; break;
    }
      while($i4 < count($arrayNumeros4));
}
// $quantidade = 5;
// do {
// echo $quantidade;
// $quantidade--;
// } while ($quantidade > 0);


// $arrayNumeros7c = [rand(0,10)];
// $i7c = 0
// do {echo $arrayNumeros7c[$i7c];
//   $i7c++;
//   if ($i = 5){
//   echo "Encontramos um 5!<br>"
//   }
// } while ($i7c);
//   echo $i7c;




  // 8. Definir uma variável $mascote​ que seja um array associativo
  // a. No índice animal​, deve dizer que animal é.
  // b. No índice idade​, deve dizer a idade.
  // c. No índice altura​, deve dizer a altura.
  // d. No índice nome,​ deve dizer o nome



 ?>
