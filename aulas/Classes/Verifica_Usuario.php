<?php

    Class Verifica_Usuario{

        private $username;
        private $email; 
        private $senha;
        private $nome;
        private $sobrenome;
        private $nascimento; 

        private $errmsg; 
        private $results;
        private $validacao;


        public function __construct($results, $validacao, $username, $email, $senha)
        {
            $this->results = $results;
            $this->validacao = $validacao;
            $this->username = $username;
            $this->email = $email;
            $this->senha = $senha;
        }

        public function cadastro(){

            // O '$results' traz os dados em array da query executada. Se nao estiver vazio, a query deu certo e eu continuo o codigo.
            // Estou usando o '$results' ao inves de usar a '$query->rowCount > 0', pois da na mesma, e caso eu precise no '$results'
            // eu ja tenho tambem os dados para manipular.
            // Se o $results retornou alguma coisa, entao o email ja existe no banco de dados, e eu nao deixo cadastrar de novo
            if(!empty($this->results)){                    
                $this->validacao = false; 
                $errmsg = "Usuário já cadastrado! Efetue Login para acessar o site!";
                $_SESSION['errmsg'] = $errmsg;
            }
            else{ // Caso nao exista o username, eu crio uma nova sql e instancio um objeto de conexao com os dados para inserir.
                $this->validacao = true;
                $senha_hash = password_hash($this->senha, PASSWORD_DEFAULT);
                $sql= "INSERT INTO users (users.username, users.email, users.senha) VALUES ('$this->username', '$this->email', '$senha_hash')";
                $conexao = new ConexaoDB("localhost","digitalhouse_db","root","a123456!",$sql);
                $resultado = $conexao->conectar();
            }    
            return $this->validacao;
        }
    }
?>