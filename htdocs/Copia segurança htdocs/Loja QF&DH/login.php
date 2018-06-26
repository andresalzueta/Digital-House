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
        <h1>
            Olá bem-vindo a sua QF & DH.
        </h1>
        <form action="https://www.linkli.com">
             <label> Email
                <br>
                <input type="email" name="email" placeholder="seuemail@mail.com">
                <br>
             <label> Senha
                <br>
                <input type="password" name="senha" placeholder="********">
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
             <button type="submit">Enviar</button>
        </form>
        <br>
        <p>Esqueci minha senha,<a href="login.php">clique aqui.</a></p>
        <br>
        <br>
        <footer>
        <?php 
           include ("footer.php");
        ?> 
        </footer>  
    </body>
</html>