<?php

    Class VerificaCadastro{

        private $results;
        private $validacao;
        private $nome;
        private $email;
        private $senha;

        public function __construct($results, $validacao, $nome, $email, $senha)
        {
            $this->results = $results;
            $this->validacao = $validacao;
            $this->nome = $nome;
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
                echo "<h3>";
                echo "<font color=red>";
                echo "Usuário já cadastrado! Efetue Login para acessar o site!";
                echo "</font>";
                echo "<br>";
                echo "<a href='index.php'>Voltar para pagina inicial</a>";
            }
            else{ // Caso nao exista o email, eu crio uma nova sql e instancio um objeto de conexao com os dados para inserir.
                $this->validacao = true;
                $senha_hash = password_hash($this->senha, PASSWORD_DEFAULT);

                ///// Descomente a variavel abaixo para testar o codigo sem a senha criptografada. Fiz isso porque a verificacao
                ///// de login nao esta funcionando com a senha criptografada
                
                // $senha_hash = $this->senha;

                $inserir= "INSERT INTO usuarios (nome, email, senha) VALUES ('$this->nome', '$this->email', '$senha_hash')";                
                $conexao = new ConexaoDB("localhost","bdteste","root","",$inserir);
                $resultado = $conexao->conectar();
            }    
            return $this->validacao;
        }
    }
?>