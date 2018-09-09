<!DOCTYPE html>
<!--Aula-49 30-8-2018-->
<!--index.php -->
<!--http://localhost:8080/teste/-->
<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Insere Novo Filme</title>
        <meta name="description" content="Edita Filme">

                
        <!-- Bootstrap Projetoe-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	</head>
	<body>
		<h1 id="tituloPrincipal">Aula 51 - JavaScript JSON & AJAX</h1>


        <div class="conteiner">
        <h2> DOM - Entendendo Document Object Model </h2>
        <ul id="myList"></ul>
        <form role="form" class="form-vertical" id="formulario" action="index_aula51.php" method="post" enctype="multipart/form-data">

                <div class="row">
            		<div class="form-group col-sm-6">
						<label for="inputPais">Selecione País</label>
                        <select class="form-control" name="inputPais" id="inputPais"></select>
					</div>
                </div>
                <div class="row">
            		<div class="form-group col-sm-6">
						<label for="inputEstado">Selecione Estado</label>
                        <select class="form-control" name="inputEstado" id="inputEstado"></select>
					</div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-6">
                        <p id="mensagem" class="alert-danger"></p>
					</div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <button type="submit" name="btn_reset" class="btn btn-basic">Enviar</button>
                        <button type="button" id="btn_list" name="btn_list" class="btn btn-basic">Listar</button>
                        
                        <button type="button" id="btn_clear" name="btn_clear" class="btn btn-basic">Limpa</button>
					</div>
                </div>
	    </form>
        </div>


		<script>
            // código JavaScript  
            // Exercícios
            let objetoJSON = '{ "first_name" : "Andrés", "last_name" : "Alzueta", "age" : 48, "birthday": null, "alive": true }';
            let objetoExercicio1 = JSON.parse( objetoJSON )
            let stringExercicio1 = JSON.stringify( objetoExercicio1 )
           
          
            

		</script>
        <script src="jscripts52.js"></script>
	</body>
</html>