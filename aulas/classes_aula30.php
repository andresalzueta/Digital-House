<!DOCTYPE html>
<!--Aula-30 17-7-2018-->
<!--classes_aula30.php -->
<!--classes de Objetos -->
<?php

    // defino uma classe abstrata que não pode ser instanciada
    abstract class Device {
        // defino propriedade publica para que subclasses herdem, usem e modifiquem esta propriedade
        public $tipo = [];
        public $status_on; 
        // defino propriedade protegida para que subclasses herdem e usem esta propriedade mas não podem modificar
        protected $protegida;
        // defino propriedade privada para que subclasses não herdem esta propriedade e não possam usar
        private $privada;
    
        public function metodo_ligar($msg) {
            echo 'Aparelho ' .$msg .' ligado' .'<br>';
            $this->status_on = true;
        }

        public function metodo_desligar($msg) {
            echo 'Aparelho ' .$msg .' desligado' .'<br>';
            $this->status_on = false;
        }
    }

    class PenDrive extends Device {
        public $musicas = [];
        public $modelo;
        public $memoria;

    }

    class Player extends Device {
        public $potencia;
        public $volume;
        public $usb;

        public function metodo_conectar($pendrive) {
                $this->usb=$pendrive;         
        }

        public function metodo_reproduzir($trilha) {
            if ($this->status_on === true && !empty($this->usb)) {
                echo 'reproduzindo trilha = ' .$this->usb->musicas[$trilha] .'<br>';
            } elseif ($this->status_on === false) {
                echo 'Não é possível reproduzir, aparelho desligado.' .'<br>';
            } elseif (empty($this->usb)) {
                echo 'Não é possível reproduzir, pendrive desconectado.' .'<br>';
            }
        }

        public function metodo_volume($volume) {
            if ($this->status_on === true){
                $this->volume=$volume;
                echo 'volume =' .$this->volume .'<br>';
                return;
            } else {
                echo 'Não é possível mudar volume, aparelho desligado.' .'<br>';
            }
        }

    }

?>