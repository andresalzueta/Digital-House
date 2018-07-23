<!DOCTYPE html>
<!--Aula-26 05-7-2018-->
<!--connectDB.php -->
<!--http://localhost:8080/teste/-->
<?php
  echo "<br>";
  echo "Sou connectDB.php";
  // 1.Gerar uma conexão com o último banco de dados utilizado durante as aulas de MySQL, colocando no DSN apenas host​ e dbname​.
  // 2. Adicionar o charset​ desejado ao DSN.
  // 3. Modificar o código com uma estrutura try/catch​ para que os erros de conexão sejam apresentados de forma mais amigável
  $dsn = "mysql:host=localhost;dbname=movies_db;charset=utf8mb4;port=3306";
  $db_user = "root";
  $db_password = "a123456!";
  // $db = new PDO($dsn, $db_user, $db_password);
  try {
      $db = new PDO($dsn, $db_user, $db_password);
  }
      catch( PDOException $Exception ) {
      echo $Exception->getMessage();
  }
  
  //Fechar conexão com banco
  //$db = null;

?>
