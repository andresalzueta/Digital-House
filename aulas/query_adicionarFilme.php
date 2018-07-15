<!DOCTYPE html>
<!--Aula-26 05-7-2018-->
<!--query_adicionarFilme.php -->
<!--http://localhost:8080/teste/-->
<?php
  echo "<br>";
  echo "Sou query_atores.php";
  // Utilizando o método Statements da classe PDO​:
  // 2. Criar adicionarFilme.php​ e adicione um formulário com um input para o nome do filme ,
  // quando enviado insira um novo filme no banco de dados utilizando statements.

  // 3. Adicionar um <select>​ com todas as opções de gênero no formulário do arquivo
  // adicionarFilme.php ​e ao enviar insira o novo filme com o gênero selecionado.

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
    $query = $db->prepare("SELECT * from series");
    $campos = ["id", "created_at", "updated_at", "title", "release_date", "end_date", "genre_id"];
    // $query->execute();
    // $select = $query->fetchAll(PDO::FETCH_ASSOC);
  } else {
    $results = "no results";
  }
  echo "<br>";
  echo "Exercício-3.2: Lista de Series em movies_db.series ";
  echo "<br>";

?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista das Series</title>
	<meta name="description" content="Series">
</head>
<body>

  <ul>
      <?php
        $query->execute();
        $select = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($select as $key => $value) {
                echo "<li>" .$value["id"] ." | " .$value["title"] ." | " .$value["genre_id"] ." | " ."</li>";
          }
      ?>
  </ul>

</body>
</html>

<?php
  //Fechar conexão com banco
  $db = null;
?>
