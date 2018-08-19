<?php
    
    require 'Produto.php';
    require 'Cliente.php';
    require 'CarrinhoItem.php';
    require 'CarrinhoCompras.php';

    if($_GET){        

        $comprador  = $_GET['comprador'];
        $email      = $_GET['email'];
        $objCliente = new Cliente($comprador, $email);

        $produto1    = $_GET['produto1'];
        $valor1      = $_GET['valor1'];
        $frete1      = $_GET['frete1'];
        $quantidade1 = $_GET['quantidade1'];
        $objProduto1 = new Produto($produto1, $valor1, $frete1);        
        $objItem1    = new CarrinhoItem($objProduto1, $quantidade1);

        $produto2    = $_GET['produto2'];
        $valor2      = $_GET['valor2'];
        $frete2      = $_GET['frete2'];
        $quantidade2 = $_GET['quantidade2'];
        $objProduto2 = new Produto($produto2, $valor2, $frete2);        
        $objItem2    = new CarrinhoItem($objProduto2, $quantidade2);

        $produto3    = $_GET['produto3'];
        $valor3      = $_GET['valor3'];
        $frete3      = $_GET['frete3'];
        $quantidade3 = $_GET['quantidade3'];
        $objProduto3 = new Produto($produto3, $valor3, $frete3);        
        $objItem3    = new CarrinhoItem($objProduto3, $quantidade3);
        
        $produto4    = $_GET['produto4'];
        $valor4      = $_GET['valor4'];
        $frete4      = $_GET['frete4'];
        $quantidade4 = $_GET['quantidade4'];
        $objProduto4 = new Produto($produto4, $valor4, $frete4);        
        $objItem4    = new CarrinhoItem($objProduto4, $quantidade4);

        $objCarrinho = new CarrinhoCompras(
            $objCliente,
            [$objItem1, $objItem2, $objItem3, $objItem4]
        );                 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
</head>
<body>
    <label>Prezado Sr(a) <font color=red> <?php echo $objCarrinho->getCliente(); ?> </font> confira abaixo os dados de sua compra</label>
    <label for=""><?php $objCarrinho->listar(); ?> </label>             -
    <div>
        Quantidade Total de Itens: <?php echo $objCarrinho->getQuantidadeDeItens(); ?>
        <br>
        Valor Total da Compra: <?php echo $objCarrinho->valorTotal(); ?>
    </div>

</body>
</html>