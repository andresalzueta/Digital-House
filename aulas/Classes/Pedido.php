<!DOCTYPE html>
<!--Aula-33 24-7-2018-->
<!--Classe_Pedido.php -->
<!--classes de Objetos -->
<?php

    namespace Classes\Pedido;

    class Pedido {
        protected $cliente;
        protected $produto; 
        protected $qtde; 
        protected $valor; 
        protected $total; 

        public function __construct(Cliente $a, Produto $b, $c){
            $this->cliente = $a;
            $this->produto = $b;
            $this->qtde = $c;
        }

        public function setTotal() {
            $this->total = $this->qtde * $this->produto->getValor();
        }

        public function getTotal() {
           return $this->total;
        }

    }
    
?>