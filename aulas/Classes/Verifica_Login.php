<?php
    Class Verifica_Login{
        private $username;
        private $senha;
        private $results;
      

        public function __construct($username, $senha, $results)
        {
            $this->username = $username;
            $this->senha = $senha;
            $this->results = $results;
        }

        public function login(){

            // O '$results' traz os dados em array da query executada. Se nao estiver vazio, a query deu certo e eu continuo o codigo.
            // Estou usando o '$results' ao inves de usar a '$query->rowCount > 0', pois da na mesma, e caso eu precise no '$results'
            // eu ja tenho tambem os dados para manipular.
            // Se o $results retornou alguma coisa, entao eu continuo o codigo para validar usuario e senha
            if(!empty($this->results)){        

                // Armazena a senha criptografada retornada pelo comando SELECT * do SQL
                $senha_hash = $this->results[0]['senha'];    

                // Compara a senha passada pelo construtor com a senha criptografada usando a funcao do PHP password_verify
                // que retorna true ou false. Armazena o retorno em uma variavel.
                $verifica_senha = password_verify($this->senha, $senha_hash);    

                
                /////// Descomente a variavel abaixo para testar o codigo sem a senha criptografada. Fiz isso porque
                /////// nao esta funcionando a verificacao de senha com criptografia

                //$verifica_senha = true;
    
                if($this->results[0]['username'] == $this->username && $verifica_senha){
                    session_start();
                    $_SESSION['username'] = $this->results[0]['username'];
                    $_SESSION['userid'] = $this->results[0]['id'];
                    $_SESSION['nome'] = $this->results[0]['nome'];
                    $_SESSION['sobrenome'] = $this->results[0]['sobrenome'];
                    $_SESSION['apelido'] = $this->results[0]['apelido'];
                    $_SESSION['email'] = $this->results[0]['email'];
                    $_SESSION['senha'] = $this->results[0]['senha'];
                    $_SESSION['senha_confirm'] = $this->results[0]['senha'];
                    $_SESSION['lembrete_senha'] = $this->results[0]['lembrete_senha'];
                    $_SESSION['updated_at'] = $this->results[0]['updated_at'];
                    $_SESSION['created_at'] = $this->results[0]['created_at'];
                    $_SESSION['nascimento'] = $this->results[0]['nascimento'];
                    $_SESSION['logado'] = true;
                    $_SESSION['errmsg'] = "Login efetuado com sucesso!";
                    echo $_SESSION['errmsg'];
                }
                else{
                    $_SESSION['logado'] = false;
                    $this->encerraSessao();
                }
            }
            else{
                $_SESSION['logado'] = false;
                $this->encerraSessao();
            }    
        }

        public function encerraSessao(){
            if(session_start()){
                session_destroy();
                unset($_SESSION['username']);
                unset($_SESSION['userid']);
                unset($_SESSION['nome']);
                unset($_SESSION['sobrenome']);
                unset($_SESSION['apelido']);
                unset($_SESSION['email']);
                unset($_SESSION['email_confirm']);
                unset($_SESSION['senha']);
                unset($_SESSION['senha_confirm']);
                unset($_SESSION['lembrete_senha']);
                unset($_SESSION['logado']);
                unset($_SESSION['created_at']);
                unset($_SESSION['updated_at']);
                $_SESSION['errmsg'] = "Usuario ou senha incorretos! Tente novamente!! <br>";
                echo $_SESSION['errmsg'];
            }
        }
    }
?>