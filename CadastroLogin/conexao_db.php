<?php
    Class ConexaoDB{

        private $host;
        private $dbname;
        private $db_user;
        private $db_pass;
        private $sql;

        public function __construct($host, $dbname, $db_user, $db_pass, $sql){
            $this->$host = $host;
            $this->dbname = $dbname;
            $this->db_user = $db_user;
            $this->db_pass = $db_pass;
            $this->sql = $sql;
        }

        public function conectar(){
            try{
                $dns = 'mysql:host=' .$this->host. ';dbname=' .$this->dbname. ';charset=utf8mb4';
                $db = new PDO($dns,$this->db_user,$this->db_pass);        
                $query = $db->prepare($this->sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_ASSOC);    
                $db = null;           
                return $results;
            }
            catch(PDOException $Exception){   
                if($Exception->getCode() == 1049){                    
                    echo "<h3>Atencao!!!<br>";
                    echo "<font color=red>Banco de dados <font color=red>" .$this->dbname. 
                         "</font> nao encontrado! Verifique o nome informado!</font><h3>";                    
                }else{
                    echo $Exception->getMessage();
                }                
                if ($db !== null){
                    $db = null;
                }
            }                    
        }     
    }
?>