<?php
    Class Produto{
        private $descricao;
        private $valor;
        private $valorFrete;

        public function __construct($descricao, $valor, $valorFrete)
        {
            $this->descricao = $descricao;
            $this->valor = $valor;
            $this->valorFrete = $valorFrete;
        }

        public function getDescricaoProduto(){
            return $this->descricao;
        }

        public function getValorProduto(){
            return $this->valor;
        }

        public function getValorFrete(){
            return $this->valorFrete;
        }
    }


?>
