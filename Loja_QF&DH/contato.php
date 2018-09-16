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
        <!-- Contato -->
<div class="container">
  <div class="col-lg-12">
    <div class="userBox center-block">
      <form action="https://www.linkli.com">
                   <label> Nome
                      <br>
                      <input class="userBordas" type="text" name="nome" placeholder="Nome Completo">
                      <br>
                   </label>
                   <br>
                   <label> Telefone
                      <br>
                      <input  class="userBordas" type="number" name="telefone" placeholder="+55(11)99000-0000">
                      <br>
                   </label>
                   <br>
                   <label> Email
                      <br>
                      <input class="userBordas" type="email" name="email" placeholder="seuemail@mail.com">
                      <br>
                   </label>
                      <br>
                   <Label> Motivo do Contato
                      <select class="userBordas">
                          <option>Selecione um assunto</option>
                          <option value="Entrega">Entrega</option>
                          <option value="Pagamento">Pagamento</option>
                          <option value="Devolução">Devolução</option>
                          <option value="Outros">Outros</option>
                      </select>
                   </Label>
                   <br>
                   <br>
                   <label>Mensagem
                      <br>
                      <textarea class="userBordas" name=”Mensagem”> </textarea>
                   </label>
                   <br>
                   <br>
                   <label> Aceito receber novidades
                      <Input type="checkbox" name="opt in">
                      </Input>
                   </label>
                   <br>
                   <br>
                   <button class="userBordas" type="reset">Limpar</button>
                   <button  class="userBordas" type="submit">Enviar</button>
              </form>
            </div> <!-- <div class="loginBox center-block">-->
          </div> <!-- </div colunas>-->
        </div> <!-- </div container>-->
        <br>
        <br>
        <div class="container">
          <div class="row">
            <div class="c-widget__header col-12">
                <div class="text-center" >
                  <a  href="index.html">Voltar Home</a>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <footer>
        <?php
           include ("footer.php");
        ?>
        </footer>
    </body>
  </html>
