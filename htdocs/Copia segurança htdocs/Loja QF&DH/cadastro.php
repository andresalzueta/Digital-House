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

        <!-- Cadastro -->
        <h1>
            Faça seu cadastro e comece a economizar!
        </h1>
        <form action="https://www.linkli.com">
             <label> Nome Completo
                <br>
                <input type="text" name="nome" placeholder="Nome Completo">
                <br>
             </label>
             <br>
             <label> Telefone
                <br>
                <input type="number" name="telefone" placeholder="+55(11)99000-0000">
                <br>
             </label>
             <br>
             <label> Email
                <br>
                <input type="email" name="email" placeholder="seuemail@mail.com">
                <br>
             </label>
                <br>
            <label> Confirme seu email
                <br>
                <input type="email" name="email" placeholder="seuemail@mail.com">
                <br>
             </label>
             <br>
             <label> Crie sua senha
                <br>
                <input type="password" name="senha" placeholder="********">
                <br>
             </label>
             <br>
             <label> Confirme sua senha
                <br>
                <input type="password" name="senha" placeholder="********">
                <br>
             </label>
             <br>
             <br>
             <label> Aceito receber novidades da QF & DH.
                <Input type="checkbox" name="opt in">
                </Input>  
             </label>
             <br>
             <br>
             <button type="submit">Enviar</button>
        </form>
        <br>
        <p>Já sou cadastrado,<a href="login.php">clique aqui.</a></p>
        <br>
        <a href="index.php">Voltar Home</a> 
        <br>
        <br>
        <footer>
        <?php 
           include ("footer.php");
        ?> 
        </footer>  
    </body>
</html>