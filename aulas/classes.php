<!DOCTYPE html>
<!--Aula-28 12-7-2018-->
<!--classes.php -->
<?php
class Pessoa {
    public $cor_dos_olhos;
    public $peso;
    public $altura;
    public $genero;
        
    public function descrever() {
        echo "olá meus olhos são da cor = " .$this->cor_dos_olhos;
        echo " e peso = " .$this->peso;
        echo " e meço = " .$this->altura;
        echo " e genero = " .$this->genero;
    }
    public function pesoideal() {
        $pesoideal = ($this->peso / pow($this->altura,2));
        if ( $this->genero == "Masculino") {
            if ( $pesoideal < 20 ) {
                echo "Peso relativo = " .$pesoideal ." abaixo do peso ideal 20~25 ";
            } elseif ( $pesoideal > 25 ) {
                echo "Peso relativo = " .$pesoideal ." acima do peso ideal 20~25 ";
            } elseif ( $pesoideal >= 20 && $pesoideal <=25 ) {
                echo "Peso relativo = " .$pesoideal ." dentro da faixa de peso ideal 20~25 ";
            } else {
                echo "Dentro do peso ideal";
            }
        } elseif ( $this->genero == "Feminino") {
            if ( $pesoideal < 19 ) {
                echo "Peso relativo = " .$pesoideal ." abaixo do peso ideal 19~24 ";
            } elseif ( $pesoideal > 24 ) {
                echo "Peso relativo = " .$pesoideal ." acima do peso ideal 19~24 ";
            } elseif ( $pesoideal >= 19 && $pesoideal <=24 ) {
                echo "Peso relativo = " .$pesoideal ." dentro da faixa de peso ideal 19~24 ";
            } else {
                echo "Dentro do peso ideal";
            }
        }
    }

}


class Retangulo {
    public $base;
    public $altura;
    public function area() {
        return $this->base * $this->altura;
    }
}

class Cambio {
    public $dolar;
    public $real;
    public $taxa_cambio;
    public function converte() {
            return $this->dolar * $this->taxa_cambio;
    }
}

?>