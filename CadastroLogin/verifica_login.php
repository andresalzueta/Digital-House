<?php
    Class VerificaLogin{

        private $email;
        private $senha;
        private $results;

        public function __construct($email, $senha, $results)
        {
            $this->email = $email;
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
    
                if($this->results[0]['email'] == $this->email && $verifica_senha){
                    session_start();
                    $_SESSION['nome'] = $this->results[0]['nome'];
                    $_SESSION['email'] = $this->results[0]['email'];
                    $_SESSION['logado'] = true;
                    echo "<h3><font color = blue>Login efetuado com sucesso! Volte para a pagina inicial e acesse o link da sua conta!";
                    echo "</font></h3><br>";
                    echo "<a href='index.php'>Voltar para pagina inicial</a>";
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
                unset($_SESSION['nome']);
                unset($_SESSION['email']);
                unset($_SESSION['logado']);                        
                echo "<h3><font color=red>";                                
                echo "Usuario ou senha incorretos! Tente novamente!! <br>";
                echo "Caso nao tenha cadastro, volte a página inicial e se cadastre para ter acesso ao site! <br>";
                echo "</font></h3>";
                echo "<a href='index.php'>Voltar para pagina inicial</a>";
            }
        }
    }
?>