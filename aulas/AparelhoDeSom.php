<?php
    require 'AudioClass.php';

    echo "<font color=red><h1>Aparelho de Som</h1></font>";

    if($_GET){
        $pendrive = new PenDrive();
        $aparelho = new AparelhoDeSom();
    }    
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aparelho de Som</title>
</head>
<body>
    <form action="AparelhoDeSom.php" method="get">
        <br>
        <input type="checkbox" name="conectar" id="">Conectar
        <br><p></p>
        <input type="radio" name="ligar" id="" value="true">Ligar
        <input type="radio" name="ligar" id="" value="false" checked>Desligar
        <br><p></p>
        <label for="volume">Volume </label><input type="range" name="volume" min="0" max="100" step="1" id="" list="tickmarks">
        <datalist id="tickmarks">
            <option value="0" label="0">
            <option value="10" label="10">
            <option value="20" label="20">
            <option value="30" label="30">
            <option value="40" label="40">
            <option value="50" label="50">
            <option value="60" label="60">
            <option value="70" label="70">
            <option value="80" label="80">
            <option value="90" label="90">
            <option value="100" label="100">
        </datalist>
        <br><p></p>

        <label for="">Escolha a musica</label>
        <br>
        <input type="radio" name="musica" id="" value="ShapeOfYou.mp3">Shape of You - Ed Sheeran
        <br>
        <input type="radio" name="musica" id="" value="CarryOnMyWaywardSon.mp3">Carry On Wayward Son - Kansas
        <br>
        <input type="radio" name="musica" id="" value="StandByMe.mp3">Standy by Me - BB King
        <br>
        <input type="radio" name="musica" id="" value="BellaCiaoRemix.mp3">The Flower of the Partyza(Bella Ciao Remix) - Full Face
        <br><p></p><br><p></p>

        <input type="submit" value="Reproduzir">        
    </form>
    <?php
    if($_GET){
        if(isset($_GET['conectar'])){
            echo "<ul>";
                echo "<li>";
                    $aparelho->conectar($pendrive);
                echo "</li>";
                if($_GET['ligar'] == 'false'){
                    echo "<li>";                    
                    $aparelho->desligar($_GET['ligar']);   
                    echo "</li>";
                 }
                 else{           
                    if(isset($_GET['musica'])){ 
                        $pendrive->musicas = $_GET['musica'];
                        echo "<li>";
                        $aparelho->ligar($_GET['ligar']);   
                        echo "</li>"; 
                        echo "<li>";
                        $aparelho->aumentarVolume($_GET['volume']);
                        echo "</li>";
                        echo "<li>";
                        $aparelho->reproduzir();
                        echo "</li>";
                        echo "<audio controls loop='loop' autoplay='true'>";
                            echo "<source src=" .$_GET['musica']. " type='audio/mp3'>";
                        echo "</audio>";                        
                    }
                    else{
                        echo "Voce precisa escolher uma musica para poder ouvir algo!";
                    }
                 }    
            echo "<ul>";
        }
        else{
            echo "<font color=red>Selecione a opção CONECTAR antes de continuar!</font><br>";
        }            
    }    
    ?>
</body>
</html>