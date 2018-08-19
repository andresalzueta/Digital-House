<!DOCTYPE html>
<!--Aula-29 17-7-2018-->
<!--classes.php -->
<!--classes de Objetos -->
<?php

    class Moeda {
        public $quantia;
        public $simbolo;
    }

    class ConverteMoeda extends Moeda {
        public function f_taxa_de_cambio($moeda1,$moeda2) {
            return $moeda1->quantia / $moeda2->quantia;
        }

        public function f_converte($moeda,$taxa_cambio) {
            return $moeda->quantia * $taxa_cambio;
        }
    }

?>