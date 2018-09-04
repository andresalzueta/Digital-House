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
		<h1 id="tituloPrincipal">Aula 50 - JavaScript & DOM - Entendendo Document Object Model</h1>


        <div class="conteiner">
        <h2> DOM - Entendendo Document Object Model </h2>
        <ul id="myList"></ul>
        <form role="form" class="form-vertical" id="formulario" action="index_aula50.php" method="post" enctype="multipart/form-data">

                <div class="row">
            		<div class="form-group col-sm-6">
						<label for="inputName">Nome</label>
						<input type="text" class="form-control" id="inputName" name="inputName" value="" placeholder="Nome">
					</div>
                    <div class="form-group col-sm-2">
						<label for="inputSex">Sexo</label>
                        <br>
                        <input type="radio" name="inputSex" value="M" checked> Masculino
                        <input type="radio" name="inputSex" value="F"> Feminino
					</div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
						<label for="inputEmail">Email</label>
						<input type="email" class="form-control" id="inputEmail" name="inputEmail" value="" placeholder="Email">
					</div>
                    <div class="form-group col-sm-2 align-left">
						<label for="inputNews">Quer Receber Newsletter ?</label>
                        <br>
                        <input type="checkbox" class="form-control" id="inputNews" name="inputNews" value="1" checked />    
					</div>
    
                </div>
                <div class="row">
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
						<label for="inputEmailConfirm">Email-confirm</label>
						<input type="email" class="form-control" id="inputEmailConfirm" name="inputEmailConfirm" value="" placeholder="Email Confirm">
					</div>

                    <div class="form-group col-sm-4">
						<label for="inputPassword">Password</label>
						<input type="text" class="form-control" id="inputPassword" name="inputPassword" value="" placeholder="Senha">
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
        <button type="button" id="btn_show" name="btn_show" class="btn btn-basic">Mostrar</button>
        </div>


		<script>
			// código JavaScript
            document.querySelector("#btn_list").onclick = function (event) {
                formulario.style.display = 'none';
                for (i = 0, len = formulario.elements.length, text = "LI"; i < len; i++) { 
                    let li = document.createElement(text);
                    let liText = document.createTextNode(formulario.elements[i].value);
                    li.appendChild(liText);
                    document.getElementById("myList").appendChild(li);
                }         
            }

            document.querySelector("#btn_show").onclick = function (event) {
                formulario.style.display = 'block';
                for (i = 0, len = formulario.elements.length, text = "LI"; i < len; i++) { 
                    let li = document.createElement(text);
                    let liText = document.createTextNode(formulario.elements[i].value);
                    li.removeChild(liText);
                    document.getElementById("myList").removeChild(li);
                }         
            }

            document.querySelectorAll("#tituloPrincipal").forEach(
                function(element){
                element.style.color = 'red';
            });

            document.querySelector("#btn_clear").onclick = function (event) {
                
                for (i = 0, len = formulario.elements.length, text = ""; i < len; i++) { 
                    formulario.elements[i].value = text
                }
                
            }

			// código JavaScript
            const inputName  = document.querySelector("#inputName")
            const inputEmail = document.querySelector("#inputEmail")
            const inputEmailConfirm = document.querySelector("#inputEmailConfirm")
            const inputSex = document.querySelector("#inputSex")
            const inputPassword = document.querySelector("#inputPassword")
            let $msgfinal = ''
          
            inputName.onfocus = function(){
                this.style.borderColor = "blue"
            }

            formulario.onsubmit = function(event){
                event.preventDefault();
                let $elemento1 = document.forms[0].elements[1]

                let $nome = this['inputName'].value
                let $email = this['inputEmail'].value
                let $email_confirm = this['inputEmailConfirm'].value
                let $password = this['inputPassword'].value
                let $sexo = this['inputSex'].value
                let $sucesso = true
            
                if (!$nome) {
                    $msgfinal = $msgfinal + 'Preencha o campo nome <br>'
                    $sucesso = false
                } 
                
                if (!$email) {
                    $msgfinal = $msgfinal + 'Preencha o campo email <br>'
                    $sucesso = false
                }

                if ($email != $email_confirm) {
                    $msgfinal = $msgfinal + 'Email deve ser igual ao Email-confirm! <br>'
                    $sucesso = false
                }
                
                if (!$password) {
                    $msgfinal = $msgfinal + 'Preencha o campo password <br>'
                    $sucesso = false
                }
                if (!$sexo) {
                    $msgfinal = $msgfinal + 'Preencha o campo sexo <br>'
                    $sucesso = false
                } 
                
                mensagem.innerHTML = $msgfinal

                if ($sucesso) {
                    $msgfinal = 'Sucesso <br>'
                    mensagem.innerHTML = $msgfinal
                    setTimeout(function(){ formulario.submit() }, 2000);
                                   
                }
            }          
           
            console.log(document.forms);
           
		</script>
	</body>
</html>