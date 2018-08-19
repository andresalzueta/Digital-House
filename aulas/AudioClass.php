
<?php

    class PenDrive{
        public $musicas;        
    }

    abstract class Equipamento{
        public $ligado;

        private function __construct()
        {
            $this->ligado = 'false';
        }

        public function ligar($ligando){            
            $this->ligado = $ligando;                        
            echo "O equipamento foi ligado!<br>";                
        }

        public function desligar($ligando){
            $this->ligado = $ligando;
            echo "O equipamento foi desligado! Se quiser ouvir musica voce vai ter que liga-lo!<br>";
        }
    }

    class AparelhoDeSom extends Equipamento{
        private $volume;
        private $usb;

        public function __construct(){
            $this->volume = 0;
        }

        public function aumentarVolume($volume){
            if($volume > 20){
                echo  "<font color=red>ATENCAO!!!</font> Cuidado com seus timpanos!!!!. Voce pediu para aumentar o volume em " .$volume. 
                      ", por isso seu volume aumentou de " .$this->volume. " para "
                       .($this->volume + $volume)."<br>";
                $this->volume = $this->volume + $volume;
            }
            else{
                echo  "Voce pediu para aumentar o volume em " .$volume. 
                      ", por isso seu volume aumentou de " .$this->volume. " para "
                       .($this->volume + $volume)."<br>";
                $this->volume = $this->volume + $volume;
            }
            
        }

        public function diminuirVolume($volume){
            if(($this->volume - $volume) < 0){
                echo  "Voce pediu para diminuir o volume em " .$volume. 
                      ", mas isso irá retornar um número negativo, pois o volume atual é de " .$this->volume. 
                      " portanto o seu volume será colocado em 0 <br>";
                $this->volume = 0;
            }
            else{          
                echo  "Voce pediu para diminuir o volume em " .$volume. 
                      ", por isso seu volume irá diminuir de " .$this->volume. " para "
                      .($this->volume + $volume). "<br>";                
                $this->volume = $this->volume + $volume;                
            }            
        }

        public function conectar($usb1){
            $this->usb = $usb1;
            echo "Dispositivo conectado na porta USB!<br>";
        }

        public function reproduzir(){
            if($this->ligado === 'true'){
                //var_dump($this->usb);
                //echo "Reproduzindo " .$this->usb;                
                echo "<br>";
            }
        }
    }












?>   


