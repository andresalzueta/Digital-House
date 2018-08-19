<!DOCTYPE html>
<!--Aula-30 17-7-2018-->
<!--programa_aula30.php -->
<!--Objetos   -->
<?php
    require('classes_aula30.php');
            
    echo '<br>';
    
    // $meu_Pendrive é um objeto a partir da classe PenDrive()
    $meu_Pendrive = new PenDrive();
    $meu_Pendrive->musicas=['musica1.mp3','musica2.mp3'];
    $meu_Pendrive->memoria='8GB';
    $meu_Pendrive->modelo='iPod';
    $meu_Pendrive->metodo_ligar('meu_Pendrive');
        
    echo 'meu_iPod ' .$meu_Pendrive->modelo .' tem memória ' .$meu_Pendrive->memoria .' e status = ' .$meu_Pendrive->status_on;
    echo '<br>';
    var_dump($meu_Pendrive->musicas);
    echo '<br>';
    echo '<br>';
  
    // $meu_Player é um objeto a partir da classe PenDrive()
    $meu_Player = new Player();
    $meu_Player->metodo_conectar($meu_Pendrive);
    $meu_Player->metodo_ligar('meu_Player');
    $meu_Player->metodo_volume(5);
    $meu_Player->metodo_reproduzir(1);
        
    echo 'meu_Player está com volume ' .$meu_Player->volume .' e status = ' .$meu_Player->status_on;
    echo '<br>';
    echo '<br>';
    var_dump($meu_Player->usb->musicas);
    echo '<br>';
    echo '<br>';
  
    // $meu_Player desligado
    $meu_Player->metodo_desligar('meu_Player');
    $meu_Player->metodo_volume(5);
    $meu_Player->metodo_reproduzir(1);
        
    echo '<br>';
    echo '<br>';

    // $meu_Player desligado
    $meu_Player->metodo_ligar('meu_Player');
    $meu_Player->metodo_volume(6);
    $meu_Player->metodo_reproduzir(0);
    echo '<br>';

?>