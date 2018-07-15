<?php
  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];
  if (strlen($nome.$sobrenome)<3) {
    header("Location:registro.php");
    exit;
  }
  $usuario = $_POST["usuario"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $genero= $_POST["genero"];
  $nacionalidade= $_POST["nacionalidade"];
  $fnac_dia= $_POST["fnac_dia"];
  $fnac_mes= $_POST["fnac_mes"];
  $fnac_ano= $_POST["fnac_ano"];
  $categorias= $_POST["categorias"];
  $descricao= $_POST["descricao"];
  $termos= $_POST["termos"];

  echo "Nome Sobrenome: $nome $sobrenome";
  echo "<br>";
  echo "Usuário: $usuario";
  echo "<br>";
  echo "Email: $email";
  echo "<br>";
  echo "Senha: $senha";
  echo "<br>";
  echo "genero $genero";
  echo "<br>";
  echo "Nacionalidade $nacionalidade";
  echo "<br>";
  echo "Nascimento: $fnac_dia/$fnac_mes/$fnac_ano";
  echo "<br>";
  echo "Categorias: ";
  foreach ($categorias as $valor) {
    echo $valor ." | ";
  }
  echo "<br>";
  echo "<br>";
  echo "Descrição: $descricao";
  echo "<br>";
  echo "Termos $termos";
  echo "<br>";

?>
