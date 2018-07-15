<!DOCTYPE html>
<!--Aula-26 05-7-2018-->
<!--query_atores.php -->
<!--http://localhost:8080/teste/-->
<?php
  echo "<br>";
  echo "Sou query_atores.php";
  // Utilizando o método query​ da classe PDO​:
  // 1. Criar um arquivo atores.php​ que monte uma lista não ordenada, ou seja um <ul> com todos os gêneros do nosso banco de dados.
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
    $query = $db->query("SELECT * from actors");
    $select = $query->fetchAll(PDO::FETCH_ASSOC);
    $campos = ["id", "created_at", "updated_at", "first_name", "last_name", "rating", "favorite_movie_id"];
  } else {
    $results = "no results";
  }
  echo "<br>";
  echo "Exercício-2.2: Lista de Atores em  movies_db.actors ";
  echo "<br>";
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista dos Atores</title>
	<meta name="description" content="Filmes">
</head>
<body>

  <ul>
      <?php foreach ($select as $key => $value) {
          echo "<li>" .$value["id"] ." | " .$value["first_name"] ." | " .$value["last_name"] ." | " .$value["rating"]  ."</li>";
          }
      ?>
  </ul>

</body>
</html>

<?php
  //Fechar conexão com banco
  $db = null;
?>
