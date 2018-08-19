<?php
    Class ConexaoDB{

        private $host;
        private $db_name;
        private $db_user;
        private $db_password;
        private $sql;
        private $errmsg;

        public function __construct($host, $db_name, $db_user, $db_password, $sql){
            $this->$host = $host;
            $this->db_name = $db_name;
            $this->db_user = $db_user;
            $this->db_password = $db_password;
            $this->sql = $sql;
        }

        public function conectar(){
            try{
                $dns = 'mysql:host='.$this->host.';dbname='.$this->db_name.';charset=utf8mb4;port=3306';
                $db = new PDO($dns,$this->db_user,$this->db_password);
                $query = $db->prepare($this->sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            }
            catch(PDOException $Exception){   
                if($Exception->getCode() == 1049){                    
                    $errmsg = "Banco de dados" .$this->db_name. "nao encontrado!";
                    $this->errmsg = $errmsg;
                    echo $errmsg;
                }else{
                    $errmsg = $Exception->getMessage();
                    $this->errmsg = $errmsg;
                    echo $errmsg;
                }
                //if ($db !== null){
                //    $db = null;
                //}
            }
            $db = null;
        }     

    }
?>