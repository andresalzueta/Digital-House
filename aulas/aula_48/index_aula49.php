<!DOCTYPE html>
<!--Aula-49 30-8-2018-->
<!--index.php -->
<!--http://localhost:8080/teste/-->
<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<h1 id="tituloPrincipal">Aula 49 - JavaScript & DOM - Entendendo Document Object Model</h1>


        <h2> DOM - Entendendo Document Object Model </h2>

        <form role="form" id="form" action="index_aula49.php" method="post" enctype="multipart/form-data">

                <div class="row">
            		<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-1">
						<label for="inputAtor">Ator</label>
						<input type="text" class="form-control disabled" id="inputAtor" name="inputAtor" value="" placeholder="Ator">
					</div>
					<div class="form-group col-sm-12">
						<label for="inputFilme">Filme</label>
						<input type="text" class="form-control" id="inputFilme" name="inputFilme" value="" placeholder="Filme">
					</div>
                </div>
                <button type="submit" name="btn_reset" class="btn btn-basic">Enviar</button>
                <button type="ola" id="btn_ola" name="btn_ola" class="btn btn-basic">Olá</button>
	    </form>

		<script>
			// código JavaScript
            const inputAtor  = document.querySelector("#inputAtor")
            const inputFilme = document.querySelector("#inputFilme")

            document.querySelector("#form").onsubmit = function (event) {
                event.preventDefault();
                if (!inputAtor.value) {
                    alert('Preencha o campo ator corretamente!')
                } else {
                    form.submit()
                }

                if (!inputFilme.value) {
                    alert('Preencha o campo filme corretamente!')
                } else {
                    form.submit()
                }
            }

            document.querySelector("#btn_ola").onsubmit = function (event) {
                event.preventDefault();
                if (btn_ola.value) {
                    alert('Olá bem vindo!')
                }S
            }

            inputAtor.onblur = function(){

            }


            const tituloPrincipal = document.querySelectorAll("#tituloPrincipal")
            
            document.querySelectorAll("#tituloPrincipal").forEach(
                function(element){
                element.style.color = 'red';
            });

            const paragrafos = document.querySelectorAll(".paragrafo")

            document.querySelectorAll(".paragrafo").forEach(
                function(element){
                element.style.color = 'blue';
            });


            console.log(tituloPrincipal.attributes);
            console.log(paragrafos.attributes);

            
            link.setAttribute("href","http://www.disney.com")

		</script>
		<script src="js\script_48.js"></script>
	</body>
</html>