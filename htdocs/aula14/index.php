<pre>
<?php
// 1. Utilizando um for​, imprimir os números de 1 a 100.
// <?php
// for (inicio; condicao; incremento) {
// // Código a executar
// }

for($i=1; $i<=100; $i++){
    echo$i;
}

echo "<br>";
echo "<br>";
echo "Ex2";
echo "<br>";
// 2. Modificar o exercício anterior para que, em vez de parar no número 100, pare em um número gerado
// aleatoriamente entre 0 e 100.
$aleatorio = rand(0,100);
for($i=1; $i<=$aleatorio; $i++){
    echo$i;
}

echo "<br>";
echo "<br>";
echo "Ex3";
echo "<br>";
// Mostrar a tabela de multiplicação do 2 utilizando um for​.


for($i=0; $i<10; $i++){
    echo $i * 2;



}


echo "<br>";
echo "<br>";
echo "Ex4";
echo "<br>";
// 4. Utilizando um while​, fazer um programa que lance uma moeda (escolhendo um número aleatório que
// pode ser 0 ou 1) até tirar 5 vezes cara​ (o número 1). Ao terminar, imprimir o número de lançamentos da
// moeda até tirar 5 vezes cara.
// Exemplo:
// while (condição) {
// // Código a executar
// }
// $quantidade = 5;
// while ($quantidade > 0) {
// echo $quantidade;
// $quantidade--;
// }

$tentativas = 0;
$sorteioCara = 0;
$i = 0;
while($i < 5){
    $aleatorio = rand(0, 1);
    if($aleatorio == 1){
        $sorteioCara ++;
        $i++;
    }
    $tentativas ++;
}
echo "O número de tentativas foi $tentativas";



echo "<br>";
echo "<br>";
echo "Ex5";
echo "<br>";
// 5. Utilizando um do/while,​ realizar um programa que lance a moeda até tirar cara​ (o número 1). No final do
// programa, imprimir quantos lançamentos da moeda forem necessários.
// Do-While - exemplo
// <?php
// $quantidade = 5;
// do {
// echo $quantidade;
// $quantidade--;
// } while ($quantidade > 0);

$lances = 0;
$i = 1;
do {
    $tentativas = rand(0, 1);
    $lances ++;
    if($tentativas == 1){
        echo "Cara"; break;
    }
}   while ($i);
    echo "lances = $lances";


echo "<br>";
echo "<br>";
echo "Ex6";
echo "<br>";
// 6. Definir um array​ com 5 strings que sejam nomes. Percorrer esse array para imprimir todos os nomes na
// tela.
// a. Resolver este problema com um for​.
// b. Resolver este problema com while​.
// c. Resolver este problema com um do/while​.
// <EXEMPLO
// $meuArray = [17, 45, 68]
// foreach ($meuArray as $valor) {
// echo $valor;
// }
// EXEMPLO
// $meuCarro = [
// “Cor” => “Vermelho”,
// “Marca” => “Ford”
// ];
// foreach ($meuCarro as $valor) {
// echo $valor;
// }

echo "<br>";
echo "<br>";
echo "Ex6a";
echo "<br>";

$arrayNomes = ["JOÃO", "MARIA", "JOSÉ", "LIMA", "AMARILDO"];
for ($i = 0; $i < count($arrayNomes); $i++){
    echo "O valor do i é: $i <br>";
    echo $arrayNomes[$i]."<br>";
}

echo "<br>";
echo "<br>";
echo "Ex6b";
echo "<br>";

$arrayNomes = ["JOÃO", "MARIA", "JOSÉ", "LIMA", "AMARILDO"];
$i = 0;
while($i < $arrayNomes){
    echo $arrayNomes[$i];
    $i++;
}


// for($arrayNomes=1; $i<=$aleatorio; $i++){
//     echo$i;
// }












?>
</pre>
