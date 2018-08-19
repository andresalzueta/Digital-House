<!DOCTYPE html>
<!--Aula-32 23-7-2018-->
<!--Classe_Produto.php -->
<!--classes de Objetos -->
<?php
    namespace DigitalHouse\Produtos;

    // defino uma classe abstrata que não pode ser instanciada  
    abstract class Produto {
        // defino propriedade protegida para que subclasses herdem e usem esta propriedade mas não podem modificar
        protected $id;
        protected $tipo;
        protected $codigo;
        protected $descricao;
        protected $valor;
        protected $valorfrete;

        public function getTipo() {
            return $this->tipo ;
        }

        public function setId($a) {
            $this->id = $a ;
        }

        public function getId() {
            return $this->id ;
        }

        public function setCodigo($a) {
            $this->codigo = $a ;
        }

        public function getCodigo() {
            return $this->codigo ;
        }

        public function setDescricao($a) {
            $this->descricao = $a ;
        }

        public function getDescricao() {
            return $this->descricao ;
        }

        public function setValor($a) {
            $this->valor = $a ;
        }

        public function getValor() {
            return $this->valor ;
        }

        public function getValorFrete() {
            return $this->valorfrete ;
        }

    }

    class Produto_simples extends Produto {
        protected $tipo = 'simples';

        public function __construct($a_codigo,$b_descricao,$c_valor){
            $this->codigo = $a_codigo;
            $this->descricao = $b_descricao;
            $this->valor = $c_valor;
        }

    }

    class Produto_virtual extends Produto {
        protected $tipo = 'virtual';
        private $license = 7;

        public function __construct($a_codigo,$b_descricao,$c_valor){
            $this->codigo = $a_codigo;
            $this->descricao = $b_descricao;
            $this->valor = $c_valor;
        }

    }
?>