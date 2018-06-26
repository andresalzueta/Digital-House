<pre>
<?php
// 8. Definir uma variável $mascote​ que seja um array associativo
// a. No índice animal​, deve dizer que animal é.
// b. No índice idade​, deve dizer a idade.
// c. No índice altura​, deve dizer a altura.
// d. No índice nome,​ deve dizer o nome

// exemplos http://www.tiexpert.net/programacao/web/php/array.php
// Para usarmos o array associativo basta apenas substituir o número do índice por uma string. Veja o exemplo abaixo.
//
// Visualizar Codigo FonteImprimir?
// 1.
// <?php
// $doc = array();
// $doc['rg'] = "00.000.000-X";
// $doc['cpf'] = "000.000.000-00";
// $doc['cartao de credito'] = 12345;
//

echo "<br>";
echo "<br>";
echo "Ex8a";
echo "<br>";


$mascote = [
  "animal" => "Leão",
  "idade" => "6 anos",
  "altura" => "1,20 mts",
  "nome" => "Xaninho",
  "filhos" => "sim",
  "CorPelo" => "Marrom",
  "Patas" => 4
];
echo "Meu animal é um ".$mascote["animal"].", "."ele tem a idade de ".$mascote["idade"]
.", "."possui aproximadamente ".$mascote["altura"]." e o seu nome é ".$mascote["nome"].".";


echo "<br>";
echo "<br>";
echo "Ex9";
echo "<br>";

// Percorrer os valores do array com um foreach​ que imprima (por exemplo):
// animal: cachorro
// idade: 5
// altura: 0,60
// nome: Sonic
// PARA QUE SERVE UM FOREACH

foreach ($mascote as $indice=>$valorindice) {
echo $indice." ".$valorindice."<br>";
};








 ?>
</pre>
