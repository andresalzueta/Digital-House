<!DOCTYPE html>

<html>
    <head>
        <?php
           include ("head.php");
        ?>
    </head>
    <body>
        <Header>
            <?php
             include ("header.php");
            ?>
        </Header>
        <br>
        <br>

        <!-- Login -->
        <div class="container">
          <div class="row">
            <div class="c-widget__header col-12" >
                <h1 class="text-center" >
                  <p class="font-weight-light">Bem-vindo à QF & DH.</p>
                </h1>
            </div>
          </div>




    <div class="col-lg-12">
      <div class="userBox center-block">
        <form action="https://www.linkli.com">
             <label> Email
                <br>
                <input class="userBordas" type="email" name="email" placeholder="seuemail@mail.com">
                <br>
             <label> Senha
                <br>
                <input class="userBordas" type="password" name="senha" placeholder="********">
                <br>
             </label>
             <br>
             <br>
             <label> Me mantenha logado.
                <Input type="checkbox" name="opt in">
                </Input>
             </label>
             <br>
             <br>
             <button class="userBordas" type="submit">Enviar</button>
        </form>
        <br>
        <p>Esqueci minha senha,<a href="login.php">clique aqui.</a></p>
    </div> <!-- <div class="loginBox center-block">-->
  </div> <!-- </div colunas>-->

<br>
<br>

  <div class="row">
    <div class="c-widget__header col-12">
        <div class="text-center" >
          <a  href="index.html">Voltar Home</a>
      </div>
    </div>
  </div>
</div> <!-- </div container>-->
<br>
<br>
        <footer>
        <?php
           include ("footer.php");
        ?>
        </footer>
    </body>
</html>
