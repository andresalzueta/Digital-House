<!DOCTYPE html>
<!--Aula-30 17-7-2018-->
<!--programa_aula30.php -->
<!--Objetos   -->
<?php
    require('classes_aula31.php');
            
    echo '<br>';
    
    // $meu_Cliente é um objeto a partir da classe Cliente()
    $meu_Cliente = new Cliente('Andres','Alzueta');
    echo 'Cliente ' .$meu_Cliente->setMetodo_Cliente();
    echo '<br>';
    
    // $meu_Carro é um objeto a partir da subclasse Veiculo_economico()
    $meu_Carro = new Veiculo_economico();
    $meu_Carro->setModelo('Uno');
    $meu_Carro->setPlaca('DII-0995');
    echo 'meu_Carro ' .$meu_Carro->getModelo() .' placa ' .$meu_Carro->getPlaca();
    echo '<br>';
    
  
    // $meu_Locacao é um objeto a partir da classe Locacao()
    $diarias = 2;
    $meu_Locacao = new Locacao($meu_Cliente,$meu_Carro,$diarias);
    $meu_Locacao->setTotalizar();
        
    echo 'meu_Locacao está locando veículo ' .$meu_Locacao->getVeiculo()->getModelo()  .PHP_EOL;
    echo '<br>';
    echo 'O valor da diaria é  ' .$meu_Locacao->getVeiculo()->getDiaria() .' e o total é ' .$meu_Locacao->getTotalizar() .PHP_EOL;
    echo '<br>';
    echo '<br>';
    
?>