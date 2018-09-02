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

          <button id="btn_ola" name="btn_ola" class="btn btn-basic">Olá</button>
          <button id="btn_fundo" name="btn_fundo" class="btn btn-basic">Muda fundo</button>

		<script>
			// código JavaScript
   
            document.querySelector("#btn_ola").onclick = function (event) {
                alert('Olá bem vindo!')
            }

            document.querySelector("#btn_fundo").onclick = function (event) {
                const btn_fundo = document.querySelectorAll("#btn_fundo")
                btn_fundo.style.color = 'red';
            }

            
		</script>
	</body>
</html>