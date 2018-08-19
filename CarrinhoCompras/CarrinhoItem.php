<?php

    class CarrinhoItem{
        
        // Variavel que vai receber um Objeto. O nome pode ser qualquer coisa, mas eu costumo iniciar o nome da variavel
        // com '$obj' seguido de um nome, pois assim eu consigo saber quando estou recebendo um Objeto em vez de uma variavel simples.
        private $objProduto; 

        // Varialvel simples que vai receber a quantidade.
        private $quantidade;

        // O construtor recebe um Objeto($objProduto) do tipo Produto que tem todos os metodos e propriedades da Classe Produto
        // que esta em outro arquivo de Classe, e recebe tambem a $quantidade passada pelo usuario/formulario, portanto, $quantidade 
        // nesse caso, nao eh um Objeto.
        //
        // Para quem tem duvidas como o construtor esta recebendo o Objeto $objProduto e a Variavel $quantidade,
        // esse Instanciamento que alimenta esse construtor esta na linha 26 do arquivo 'Checkout.php'
        public function __construct(Produto $objProduto, $quantidade){
            $this->objProduto = $objProduto;
            $this->quantidade = $quantidade;
        }

        // Esse metodo getItem() quando for chamado vai retornar todo o Objeto Produto que o construtor recebeu
        // pois isso vai permitir continuar a usar todos os metodos e propriedades do Objeto Produto em um outro lugar
        // mesmo sem Instanciar a classe, o que significa que nao eh preciso fazer  $varialvel = new Produto().
        public function getItem(){
            return $this->objProduto;
        }

        // Retorna a quantidade recebida no construtor
        public function getQuantidade(){
            return $this->quantidade;
        }

        // Esse metodo calcula o valor total do Item (por item). Repare que o 'objProduto' chama o metodo getValorProduto() e getValorFrete()
        // que nao estao nessa classe CarrinhoItem, e sim na Classe Produto, pois o objProduto eh uma Instancia da Classe Produto e essa 
        // Instancia foi recebida aqui atraves do construtor, portanto todos os metodos e propriedades estao disponiveis para uso, mesmo eles
        // nao existindo aqui nessa Classe. Os metodos 'getValorProduto' e 'getValorFrete' estao no arquivo 'Produto.php', nas linhas 18 e 22
        public function getTotalItem(){
            return (($this->objProduto->getValorProduto() * $this->quantidade) + $this->objProduto->getValorFrete());
        }

    }

?>