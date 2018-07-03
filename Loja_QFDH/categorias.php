<!DOCTYPE html>
<html>
    <head>
        <?php
           include ("head.php");
        ?>
    </head>
    <body>
    <!-- <div class="container"> -->
        <header>
             <?php
                 include ("header.php");
             ?>
        </header>

        <div id="categorias">
            <div class="Masculino">
                <a href="masculino.php"><img src="img/masculino.jpg" alt="Masculino" class="categoriaMasc"></a>
            </div>
            <div class="Feminino">
                <a href="feminino.php"><img src="img/feminino.jpg" alt="Feminino" class="categoriaFem"></a>  
            </div>
            <div class="Kids">
                <a href="kids.php"><img src="img/kids.jpg" alt="Kids" class="categoriaKids"></a>
            </div>
        </div>
        <div class="textoMasc">
            <a href="masculino.php"><p>Masculino</p></a>
        </div>
        <div class="textoFem">
            <a href="feminino.php"><p>Feminino</p></a>
        </div>
        <div class="textoKids">
            <a href="kids.php"><p>Kids</p></a>
        </div>




       <?php
            include ("footer.php");
        ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
    </body>
</html> 