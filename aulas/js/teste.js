function request (callback){
    console.log('A) fazendo a request, por favor aguarde...')

    setTimeout( function() {
        let nome = 'A) resultado com delay de 3000 milisegundos'
        callback(nome)
    } , 3000 )
}

function mostrarDados(dados) {
    console.log(dados)
}

// neste exemplo a função mostrarDados só será executada depois do timeout definido na função request
request(mostrarDados)

function elevarAoSegundo(a,b) {
    c = a ** b
    console.log(c)
}


function trianguloRetangulo(a,b) {

    function hipotenusa(a,b) {
        h = Math.sqrt((a**2)+(b**2))
        return h
    }

    c = a + b + hipotenusa(a,b)
    console.log(c)
}

function quadrado(a) {
    b = a ** 2
    console.log(b)
}

function atribuicao () {
    let numero = 5 ;
    console.log(numero);
}


function meuSanduiche (a,b,callback) {
    console.log('B) Estou comendo um sanduiche de ' + a + ' e ' + b)

    setTimeout(function() {
        callback()
    },5000 )
}

function msg () {
    let msg = 'B) terminei de comer'
    console.log(msg)
}


meuSanduiche ('presunto','queijo', msg )


