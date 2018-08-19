<?php
    //namespace Classes\Cadastro;
    // defino uma classe  que não pode ser instanciada
    class Cadastro_Usuario {
        // defino propriedade publica para que subclasses herdem, usem e modifiquem esta propriedade
        // defino propriedade protegida para que subclasses herdem, usem mas não  modifiquem esta propriedade
        // defino propriedade privada para que subclasses não herdem nem usem e modifiquem esta propriedade exceto via métodos get e set.

        private $id;
        private $username;
        private $email; 
        private $senha;

        private $lembrete_senha;
        private $nome;
        private $sobrenome;
        private $apelido;
        private $nascimento; 
        private $created_at; 
        private $updated_at; 

        private $errmsg; 
        private $results;
        private $validacao;


        function f_limpa_input($data) {
            $data = rtrim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
    
        public function __construct($usuario,$nome,$sobrenome,$email,$senha,$lembrete_senha) {
            $this->username =  $usuario;
            $this->nome = $nome;
            $this->sobrenome  = $sobrenome;
            $this->email = $email;
            $this->senha = $senha;
            $this->lembrete_senha = $lembrete_senha;
            
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

        public function alterar() {
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
                $sql = "UPDATE users 
                        SET users.username = :b_username,
                            users.nome = :b_nome, 
                            users.sobrenome = :b_sobrenome, 
                            users.senha = :b_senha,                             
                            users.lembrete_senha = :b_lembrete_senha, 
                            users.updated_at = :b_updated_at
                        WHERE users.id = $userid";
                $query = $db->prepare($sql);
                // variáveis de conexão<>binding  :b_variavel
                $resultado = $query->execute([
                        ":b_username" => $this->username, 
                        ":b_nome" => $this->nome, 
                        ":b_sobrenome" => $this->sobrenome, 
                        ":b_senha" => $this->senha,
                        ":b_lembrete_senha" => $this->lembrete_senha, 
                        ":b_updated_at" => date("Y-m-d H:i:s")
                ]);
                $errmsg = "Registro alterado na tabela com ID = " .$db->lastInsertId();
                $_SESSION['errmsg'] = $errmsg;
            } else {
              $resultado = false;
              $errmsg = "Registro NÃO inserido na tabela !";
              $_SESSION['errmsg'] = $errmsg;
            }
            //Fechar conexão com banco
            $db = null;           
            return $resultado;
        }

        public function inserir() {
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
                $sql ='INSERT INTO users (users.username, users.email, users.senha, users.lembrete_senha, users.created_at, users.updated_at)
                       VALUES (:b_username, :b_email, :b_senha, :b_lembrete_senha, :b_created_at, :b_updated_at)';
                $query = $db->prepare($sql);
                $resultado = $query->execute([
                    // variáveis de conexão<>binding  :b_variavel
                    ":b_username"  => $this->username,
                    ":b_email" => $this->email,
                    ":b_senha" => $this->senha,
                    ":b_lembrete_senha" => $this->lembrete_senha,
                    ":b_created_at" => date("Y-m-d H:i:s"),
                    ":b_updated_at" => date("Y-m-d H:i:s")
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