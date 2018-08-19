<!DOCTYPE html>
<!--Aula-33 24-7-2018-->
<!--Classe_Cliente.php -->
<!--classes de Objetos -->
<?php
    namespace Classes\Cliente;
    // defino uma classe abstrata que não pode ser instanciada
    class Cliente {
        // defino propriedade publica para que subclasses herdem, usem e modifiquem esta propriedade
        private $id;
        private $nome;
        private $email; 

        public function __construct($a_nome,$b_email){
            $this->nome  = $a_nome;
            $this->email = $b_email;
        }

        public function getId() {
            return $this->id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getEmail() {
            return $this->email;
        }

    }
  

?>