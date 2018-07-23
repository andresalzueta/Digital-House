<!DOCTYPE html>
<!--Aula-26 05-7-2018-->
<!--connect_db.php -->
<!--http://localhost:8080/teste/-->
<?php
  echo "<br>";
  echo "Sou connect_db.php";

  // 1.Gerar uma conexão com o último banco de dados utilizado durante as aulas de MySQL, colocando no DSN apenas host​ e dbname​.
  // 2. Adicionar o charset​ desejado ao DSN.
  // 3. Modificar o código com uma estrutura try/catch​ para que os erros de conexão sejam apresentados de forma mais amigável
  $dsn = "mysql:host=localhost;dbname=movies_db;charset=utf8mb4;port=3306";
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
    $query = $db->query("SELECT * from movies");
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
  } else {
    $results = "no results";
  }

  echo "<br>";
  echo "Exercício-1 ";
  echo "<br>";
  echo "id | title | rating | length";
  echo "<br>";
  foreach ($results as $key => $value) {
    echo $value["id"] ."  | " .$value["title"] ." | " .$value["rating"] ." | " .$value["length"];
    echo "<br>";
  }
  //var_dump($results);

  //Fechar conexão com banco
  $db = null;

?>
