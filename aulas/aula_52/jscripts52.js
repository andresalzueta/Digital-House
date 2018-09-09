// jscripts52.js

function modelo() {
   // descrever a função
}

// declaro constantes
const myList     = document.querySelector("#myList")
const mySection  = document.querySelector("#myList")
const myBtn      = document.querySelector("#myBtn")
const myBtnStop  = document.querySelector("#myBtnStop")
const myBtnPlay  = document.querySelector("#myBtnPlay")

// declaro variáveis
let $msgfinal = ''

function isEven(num) {
    if (num % 2 === 0) {
        return true;
    } else {
        return false;
    }
}

function exercicio_1() {
    // descrever a função
    // 1. Criar um site com apenas um botão que diga “Clique em mim” e que, quando clicado:
    //    a. Mostre um alert
    //    b. Alterne a cor de fundo entre vermelho e azul
    //    c. Adicione um novo parágrafo dizendo “Clique número N ”
    let myClick = 0
    myBtn.onclick = function(){
        myClick ++
        let tagHtml = 'P'
        let linha = document.createElement(tagHtml);
        let texto = 'Clique número' + myClick
        let linhaTexto = document.createTextNode(texto);
        alert(texto)
        linha.appendChild(linhaTexto);
        document.getElementById("myList").appendChild(linha);
        if ( isEven(myClick) ) {
            this.style.backgroundColor = "blue"
            document.body.style.backgroundColor = "red";
        } else {
            this.style.backgroundColor = "red"
            document.body.style.backgroundColor = "blue";
        }
    }
}


function exercicio_2() {
    // Modificar o arquivo anterior de forma que, se o usuário pressionar a tecla “S” (Stop),
    //  o botão deixe de funcionar, e se ele pressionar a tecla “P” (Play), o botão volte a funcionar.            
    myBtnStop.onclick = function(){
        myBtn.style.visibility = 'hidden'
        myBtnStop.style.backgroundColor = "gray"
        myBtnPlay.style.backgroundColor = "green"
        document.body.style.backgroundColor = "white";
    }

    myBtnPlay.onclick = function(){
        myBtn.style.visibility = 'visible'
        myBtnStop.style.backgroundColor = "gray"
        myBtnPlay.style.backgroundColor = "gray"
        document.body.style.backgroundColor = "white";
    }

}

window.onload = function() {
    modelo()
    exercicio_1()
    exercicio_2()
}