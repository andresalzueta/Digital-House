<!DOCTYPE html>
<!--Projeto Integrador | Editado por Daniel-->
<!--cadastro_old.php -->
<!--http://localhost:8080/Digital-House/Loja_QFDH/cadastro_old.php-->

<!DOCTYPE html>

<html>
    <head>
        <?php
           include ("head.php");
        ?>
    </head>
    <body>
        <header>
            <?php
             include ("header.php");
            ?>
        </header>
        <br>
        <br>

        <!-- Cadastro -->
        <div class="container">
          <div class="row">
            <div class="c-widget__header col-12">
                <h1 class="text-center" >
                  <p class="font-weight-light">Faça seu cadastro e comece um mundo de possibilidades!</p>
                </h1>
            </div>
          </div>
        </div>


<div class="container">
  <div class="col-lg-12">
    <div class="userBox center-block">
        <form action="https://www.linkli.com">
             <label> Nome Completo
                <br>
                <input class="userBordas" type="text" name="nome" placeholder="Nome Completo">
                <br>
             </label>
             <br>
             <label> Telefone
                <br>
                <input class="userBordas" type="number" name="telefone" placeholder="+55(11)99000-0000">
                <br>
             </label>
             <br>
             <label> Email
                <br>
                <input class="userBordas" type="email" name="email" placeholder="seuemail@mail.com">
                <br>
             </label>
                <br>
            <label> Confirme seu email
                <br>
                <input class="userBordas" type="email" name="email" placeholder="seuemail@mail.com">
                <br>
             </label>
             <br>
             <label> Crie sua senha
                <br>
                <input class="userBordas" type="password" name="senha" placeholder="********">
                <br>
             </label>
             <br>
             <label> Confirme sua senha
                <br>
                <input class="userBordas" type="password" name="senha" placeholder="********">
                <br>
             </label>
    </div> <!-- <div class="userBox center-block">-->
  </div> <!-- </div colunas>-->
</div> <!-- </div container>-->
  <br>
        <div class="container">
          <div class="col-lg-12">
            <div class="userBox center-block">
             <label> Aceito receber novidades da QF & DH.
                <Input type="checkbox" name="opt in">
                </Input>
             </label>
             <br>
             <br>
             <button class="userBordas" type="submit">Enviar</button>
        </form>
        <br>
        <p>Já sou cadastrado,<a href="login.php">clique aqui.</a></p>
        <br>
        <a href="index.php">Voltar Home</a>
      </div> <!-- <div class="userBox center-block">-->
    </div> <!-- </div colunas>-->
  </div> <!-- </div container>-->
      <br>
        <footer>
        <?php
           include ("footer.php");
        ?>
        </footer>
    </body>
</html>
