<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
</head>
<body>
    <form action="Checkout.php" method="get">
        <div>
            <label for=""><h3>Dados do Comprador</h3></label>
            Nome: <input type="text" name="comprador" id=""><br>
            Email: <input type="text" name="email" id="">
        </div>            
        <br><p></p>

        <div>
            <label for=""><h3>Dados do Produto</h3></label>
            <?php for($i = 1; $i < 5; $i++){ ?>
                Produto<?php echo $i ?>: <input type="text" name=<?php echo 'produto'.$i ?>  id="">
                Valor<?php echo $i ?>: <input type="text" name=<?php echo 'valor'.$i ?>  id="">
                Frete<?php echo $i ?>: <input type="text" name=<?php echo 'frete'.$i ?>  id="">
                Quantidade<?php echo $i ?>: <input type="text" name=<?php echo 'quantidade'.$i ?>  id="">    
                <br>
            <?php 
                }
            ?>
        </div>                  
        <br><p></p>
        <input type="submit" value="comprar">    
    
    </form>
</body>
</html>