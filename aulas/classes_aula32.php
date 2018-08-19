<!DOCTYPE html>
<!--Aula-31 19-7-2018-->
<!--classes_aula31.php -->
<!--classes de Objetos -->
<?php

    // defino uma classe abstrata que não pode ser instanciada
    class Cliente {
        // defino propriedade publica para que subclasses herdem, usem e modifiquem esta propriedade
        protected $nome;
        protected $sobrenome; 

        public function __construct($a,$b){
            $this->nome = $a;
            $this->sobrenome = $b;
        }


        public function setMetodo_Cliente() {
            return $this->nome .' '.$this->sobrenome;
        }

    }
  
    class Locacao {
        protected $veiculo;
        protected $locador; 
        protected $diarias; 
        protected $total; 

        public function __construct(Cliente $a, Veiculo $b, $c){
            $this->locador = $a;
            $this->veiculo = $b;
            $this->diarias = $c;
        }

        public function setTotalizar() {
            $this->total = $this->diarias * $this->veiculo->getDiaria();
        }

        public function getTotalizar() {
           return $this->total;
        }

        public function getVeiculo() {
            return $this->veiculo;
        }

    }
      
    abstract class Veiculo {
        // defino propriedade protegida para que subclasses herdem e usem esta propriedade mas não podem modificar
        protected $tipo;
        protected $valorDiaria;
        protected $placa;
        protected $modelo;

        public function setModelo($a) {
            $this->modelo = $a ;
        }

        public function getModelo() {
            return $this->modelo ;
        }

        public function setPlaca($a) {
            $this->placa = $a ;
        }

        public function getPlaca() {
            return $this->placa ;
        }

        public function getDiaria() {
            return $this->valorDiaria;
        }

    }

    class Veiculo_economico extends Veiculo {
        protected $tipo = 'economomico';

        public function __construct(){
            $this->valorDiaria = 85;
        }
    }

    class Veiculo_familia extends Veiculo {
        protected $tipo = 'familia';
        private $lugares = 7;

        public function __construct(){
            $this->valorDiaria = 170;
        }

    }

    class Veiculo_luxo extends Veiculo {
        protected $tipo = 'luxo';

        public function __construct(){
            $this->valorDiaria = 210;
        }

    }

?>