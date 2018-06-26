<pre>   
<?php
// 4. Criar um array associativo que contenha as seguintes propriedades de um carro: Marca, Modelo,
// Cor, Ano e Placa. Em seguida, executar um var_dump para ver os resultados.
// a. Adicionar o nome do dono na posição 0 do array e imprimir o resultado
// b. Adicionar a empresa seguradora na posição 14 e imprimir o resultado.
// c. Modificar o número da placa e imprimir o resultado.
// d. Modificar o nome do dono e imprimir o resultado.


$carro = ["Marca" => "Wolks",
"Modelo" => "Fuca",
"Cor" => ["Preto","Branco"],
"Ano" => "1500",
"Placa" => "IXI0001"
];
$carro[0]="Proprietário Sérgio Malandro";
$carro[14]="Seguradora Javiu";
$carro[3]="IXI0002";
$carro[0]="Proprietário Sérgio Malandro da Silva";

var_dump($carro);

?>
</pre>
