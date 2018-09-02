// main.js

function modelo() {
   // descrever a função
}

function tituloH1() {
    // deixará H1 em branco        
    document.getElementById("titular").style.display = 'none';
}

function coruja() {
    document.querySelector("#lechuza").style.filter = "grayscale(100%)";
}

function allInputs() {
    document.querySelectorAll("input").forEach(
        function(element){
        // element.style.color = 'blue';
        element.style.background = "red";
    });
}

function allTextArea() {
    document.querySelectorAll("textarea").forEach(
        function(element){
        // element.style.color = 'blue';
        element.style.background = "red";
    });
}

function getCopyright() {
    // descrever a função
    elemento = document.querySelector("#copyright")
    console.log(elemento.attributes)
 }

 function getTwitter() {
    // descrever a função
    elemento = document.querySelector(".fa-twitter")
    console.log("A URL do Twitter é: "+ elemento.href);	
}

 function getFacebook() {
    // descrever a função
    elemento = document.querySelector(".fa-facebook")
    console.log("A URL do Facebook é: "+ elemento.href);	
 }

 function setYoutube() {
    // descrever a função
   // element.onclick = function()
   elemento = document.querySelector(".fa-youtube")
   elemento.setAttribute("href","http://www.youtube.com")
   console.log("A URL do Youtube é: "+ elemento.href);	
 }

 function getForm() {
    // descrever a função
    elemento = document.querySelector("form")
    $hasAction = elemento.hasAttribute("action") ? "Sim" : "Não"
    console.log("Atributo action do Form está definida: " + $hasAction);	
 }

 function setFormAction() {
    // descrever a função
    elemento = document.querySelector("form")
    elemento.removeAttribute("url")
    elemento.setAttribute("action","http://www.digitalhouse.com")
    console.log("Atributo action do Form será : " + elemento.action);	
 }

function setH2() {
    // deixará H1 em branco        
    document.querySelectorAll("H2").forEach(
        function(element){
        // element.style.color = 'blue';
        element.style.color = "red";
    });
}

function setIcon() {
    // deixará H1 em branco        
    document.querySelectorAll(".icon").forEach(
        function(element){
        // element.style.color = 'blue';
        element.style.color = "blue";
    });
}

 window.onload = function() {
    tituloH1() 
    coruja() 
    //allInputs()
    allTextArea()
    getCopyright()
    getTwitter()
    getFacebook()
    setYoutube()
    getForm()
    setFormAction()
    setH2()
    setIcon()
}