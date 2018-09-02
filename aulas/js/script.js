
// neste exemplo a função mostrarDados só será executada depois do timeout definido na função request
function perguntas() {
    let $a = prompt("Insira valor a");
    let $b = prompt("Insira valor b");
    let $confirma = confirm("Você tem certeza que a = "+ $a + " e b = " + $b + " ?");   
   
    return {
        $a,
        $b,
        $confirma,
    };
}

function minhaConta ($a,$b) {
    //abaixo temos um if ternário
    let $numeroMaior = parseInt($a) > parseInt($b) ? $a : $b ;

    window.alert('O número maior é ' + $numeroMaior + ' !')   
}

let $request = perguntas();

if ($request.$confirma) {
    minhaConta ($request.$a, $request.$b);
} else {
    window.location.reload()
}

