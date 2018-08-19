<!DOCTYPE html>
<!--Aula-32 23-7-2018-->
<!--Classe_Carrinho.php -->
<!--classes de Objetos -->
<?php
    namespace DigitalHouse\Carrinho;

    class Carrinho {
        private $cliente;
        private $itens; 
        private $frete; 
        private $valor; 
        private $total; 

        public function __construct(Cliente $a, CarrinhoItens $b){
            $this->cliente = $a;
            $this->itens = $b;
        }

        public function setTotal() {
            foreach (this->itens as $item){
                $valorTotal = $valorTotal + $item->getValorTotalItem();
            }
            $this->total = $valorTotal;
        }

        public function getTotal() {
            return $this->total;
        }

        public function valorTotal() {
            foreach (this->itens as $item){
                $valorTotal = $valorTotal + $item->getValorTotalItem();
            }
            return $valorTotal;
        }  
    }
    
    class CarrinhoItem {
        protected $carrinho;
        protected $produtoItem; 
        protected $qtde; 
        protected $valorItem; 
        protected $valorTotalItem; 

        public function __construct(Cliente $a, Produto $b, $c){
            $this->cliente = $a;
            $this->produto = $b;
            $this->qtde = $c;
        }

        public function setTotal() {
            $this->total = $this->qtde * $this->produto->getValor();
        }

        public function getProduto() {
           return $this->produtoItem;
        }

        public function getValorItem() {
            return $this->valorItem;
         }

        public function getTotalItem() {
            return $this->total;
         }

        public function valorTotalItem() {
            return (this->valorItem * $this->qtde);
        }
 
        public function setTotalItem() {
            this->valorTotalItem = this->valorItem * $this->qtde;
        }

?>