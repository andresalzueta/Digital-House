// jscripts.js

function modelo() {
   // descrever a função
}

// declaro constantes
const inputPais  = document.querySelector("#inputPais")
const inputEstado  = document.querySelector("#inputEstado")
const inputCidade  = document.querySelector("#inputCidade")

// declaro variáveis
let $pais_id = null
let $estado_id = null
let $cidade_id = null
let $msgfinal = ''

inputPais.onfocus = function(){
    this.style.borderColor = "blue"
}

document.querySelectorAll("#tituloPrincipal").forEach(
    function(element){
    element.style.color = 'red';
});

document.querySelector("#btn_list").onclick = function (event) {
    formulario.style.display = 'none';
    for (i = 0, len = formulario.elements.length, text = "LI"; i < len; i++) { 
        let li = document.createElement(text);
        let liText = document.createTextNode(formulario.elements[i].value);
        li.appendChild(liText);
        document.getElementById("myList").appendChild(li);
    }         
}

document.querySelector("#btn_clear").onclick = function (event) {
    
    for (i = 0, len = formulario.elements.length, text = ""; i < len; i++) { 
        formulario.elements[i].value = text
    }   
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

function exemploJSON() {
    // descrever a função
    let objetoEmFormatoJSON = '{ "atributo0": "valor0", "atributo1": 1,"atributo2": [], "atributo3": null, "atributo4": false }';

    let objetoJSON = '{ "first_name" : "Andrés", "last_name" : "Alzueta", "age" : 48, "birthday": null, "alive": true }';

    let responseAPI = '{ "atributo0": "valor0", "atributo1": 1,"atributo2": [], "atributo3": null, "atributo4": false }';
    // JSON.parse() converte uma string num objeto JSON
    let objetoExercicio1 = JSON.parse( responseAPI )
    // JSON.stringify() converte um JSON numa string
    let stringExercicio1 = JSON.stringify( objetoExercicio1 )

    let enviarDados = {

    }
}

function exemploXMLHttp() {
    // descrever a função
    let xmlhttp = new XMLHttpRequest();
    $url = 'http://jsonplaceholder.typicode.com/posts'

    xmlhttp.onreadystatechange = function() {
        // readyState 
        // 0 = não inicializou
        // 1 = carregando
        // 2 = solicitação enviada
        // 3 = respostas está sendo baixada
        // 4 = carregou / terminou
        if (xmlhttp.readyState == 3 && xmlhttp.status == 200) {
            console.log(xmlhttp.responseText);
            //Meu código
        }
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            console.log(xmlhttp.responseText);
            //Meu código
        }
    };
    xmlhttp.open("GET", "url", true);
    xmlhttp.send();
}

function getPaises() {
    // descrever a função
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        // readyState 4 = carregou / terminou
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            console.log(xmlhttp.responseText);
            let resposta = JSON.parse(xmlhttp.responseText)
            let respostaEmArray = Object.entries(resposta.contenido)
            respostaEmArray.forEach(function (item) {
                let $pais = item[0]
                let $id = item[1]
                let option = document.createElement("OPTION");
                let optionText = document.createTextNode( $pais );
                option.setAttribute("value", $id);
                option.appendChild(optionText)
                //document.getElementById("inputPais").appendChild(option);
                document.querySelector("#inputPais").appendChild(option);
            })
        }
    }
    $url = 'http://pilote.techo.org/?do=api.getPaises'
    xmlhttp.open('GET', $url, true);
    xmlhttp.send();
    //
    console.log(xmlhttp.responseText);
}

document.querySelector("#inputPais").onclick = function (event) {
    this.style.color = 'red';
}

document.querySelector("#inputPais").onchange = function (event) {
    $pais_id = inputPais.getAttribute("value");
}

function getEstados(argumento) {
    // descrever a função
    let $country = argumento

    let xmlhttp = new XMLHttpRequest()
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 0 && xmlhttp.status == 200) {
            
            let resposta = JSON.parse(xmlhttp.responseText)
            let respostaEmArray = Object.entries(resposta.contenido)
            respostaEmArray.forEach(function (item) {
                let $pais = item[0]
                let $id = item[1]
                let option = document.createElement("OPTION");
                let optionText = document.createTextNode( $pais );
                option.setAttribute("value", $id);
                option.appendChild(optionText)
                //document.getElementById("inputPais").appendChild(option);
                document.querySelector("#inputPais").appendChild(option);
            })
        
        // readyState 4 = carregou / terminou
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            console.log(xmlhttp.responseText);
            let resposta = JSON.parse(xmlhttp.responseText)
            let respostaEmArray = Object.entries(resposta.contenido)
            respostaEmArray.forEach(function (item) {
                let $estado = item[0]
                let $id = item[1]
                let option = document.createElement("OPTION");
                let optionText = document.createTextNode( $estado );
                option.setAttribute("value", $id);
                option.appendChild(optionText)
                //document.getElementById("inputPais").appendChild(option);
                document.querySelector("#inputEstado").appendChild(option);
            })
        }
    };
    $url = 'http://pilote.techo.org/?do=api.getRegioes?idPais=[$country]'
    xmlhttp.open('GET', $url, true);
    xmlhttp.send();
    //
    console.log(xmlhttp.responseText);
}


function getTypiCode() {
    // outro método de request de API
    let $url = 'http://jsonplaceholder.typicode.com/posts'
    fetch($url).then(function(response){
        response.json().then(function(dados){
            console.log(dados)
        })
    })
    // Obs.: then() é uma promise quando receber o conteúdo da fetch
}

function getNaNuvem() {
    // outro método de request de API
    let $url = 'http://jsonplaceholder.typicode.com/posts'
    fetch($url).then(function(response){
        response.json().then(function(dados){
            mostrarNaTela(dados)
        })
    })
    // Obs.: then() é uma promise quando receber o conteúdo da fetch
}

function mostrarNaTela(dados) {
    // outro método de request de API
    let conteudo = 
    dados.foreach( function( postagem ) {
        let title = postagem.title
        let body = postagem.body

        conteudo = conteudo + '<h2>' + title + '</h2>'
        conteudo = conteudo + '<p>' + body + '</p>'
    })
    document.body.innerHTML = conteudo.join('<hr>')
    // Obs.: then() é uma promise quando receber o conteúdo da fetch
}



window.onload = function() {
    modelo()
    //getPaises()
    //getEstados($pais_id)
    getNaNuvem()
}