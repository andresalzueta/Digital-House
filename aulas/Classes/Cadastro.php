<!DOCTYPE html>
<!--Aula-34 26-7-2018-->
<!--\Classes\Cadastro.php -->
<!--classes de Objetos -->
<?php
    //namespace Classes\Cadastro;
    // defino uma classe  que não pode ser instanciada

    class Cadastro {
        // defino propriedade publica para que subclasses herdem, usem e modifiquem esta propriedade
        // defino propriedade protegida para que subclasses herdem, usem mas não  modifiquem esta propriedade
        // defino propriedade privada para que subclasses não herdem nem usem e modifiquem esta propriedade exceto via métodos get e set.
        private $nome;
        private $sobrenome;
        private $username;
        private $email; 
        private $nascimento; 
        private $errmsg; 

        function f_limpa_input($data) {
            $data = rtrim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
    
        public function __construct($a_nome,$a_sobrenome,$a_usuario,$a_email,$a_senha) {
            $this->nome = $a_nome;
            $this->sobrenome  = $a_sobrenome;
            $this->username =  $a_usuario;
            $this->email = $a_email;
            $this->senha = $a_senha;
        }

        public function getId() {
            return $this->id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getErrmsg() {
            return $this->errmsg;
        }

        public function salvarDados() {
            $dsn = "mysql:host=localhost;dbname=digitalhouse_db;charset=utf8mb4;port=3306";
            $db_user = "root";
            $db_password = "a123456!";
            $db=null;
            // $db = new PDO($dsn, $db_user, $db_password);
            try {
                $db = new PDO($dsn, $db_user, $db_password);
            }
            catch( PDOException $Exception ) {
                echo $Exception->getMessage();
            }
            if (isset($db)){
                $sql ='INSERT INTO users (users.nome, users.sobrenome, users.username, users.email, users.senha) 
                        VALUES (:b_nome, :b_sobrenome, :b_username, :b_email, :b_senha)';
                $query = $db->prepare($sql);
                $resultado = $query->execute([
                    // variáveis de conexão<>binding  :b_variavel
                    ":b_nome"  => $this->nome,
                    ":b_sobrenome"  => $this->sobrenome,
                    ":b_username"  => $this->username,
                    ":b_email" => $this->email,
                    ":b_senha" => $this->senha
                ]);
                $errmsg = "Registro inserido na tabela com ID = " .$db->lastInsertId();             
            } else {
              $resultado = false;
              $errmsg = "Registro NÃO inserido na tabela !";
            }
            return $resultado;
        }
    }
?>