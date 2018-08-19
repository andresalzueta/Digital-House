<?php
    Class CarrinhoCompras{

        private $objCliente;
        private $objCarrinhoItem;


        // Construtor recebendo dois Objetos. Objeto Cliente com todos os metodos e propriedades da Classe Cliente e 
        // Objeto CarrinhoItem. Note que o Objeto que vem de CarrinhoItem eh um pouco mais complexo pois ele eh um Objeto
        // que ja havia recebido um Objeto antes de vir para ca. 
        //
        // Exemplo:
        //
        // *** Arquivo Produto.php tem a Classe Produto.
        //
        // *** Arquivo CarrinhoItem.php tem a Classe CarrinhoItem que recebeu por parametro/construtor o Objeto Produto.
        //     Com isso, CarrinhoItem agora pode acessar os metodos e propriedades da Classe Produto.
        //
        // *** Arquivo CarrinhoCompras.php tem a Classe CarrinhoCompras que recebeu por parametro/construtor o Objeto CarrinhoItem
        //     que ja havia recebido por parametro/construtor a Classe Produto.
        //     Com isso, a Classe CarrinhoCompras agora pode acessar tanto os metodos e propriedades da Classe CarrinhoItem
        //     como tambem pode acessar os metodos e propriedades da Classe Produto, desde que voce tenha os metodos que lhe
        //     permita acessar as propriedades que voce quer. 
        //     Abaixo vai ser possivel ver isso.
        // 
        // Para quem tem duvidas como o construtor esta recebendo os Objetos $objCliente e $objCarrinhoItem,
        // esse Instanciamento que alimenta esse construtor esta na linha 27 do arquivo 'Checkout.php'
        public function __construct(Cliente $objCliente, $objCarrinhoItem ){
            $this->objCliente = $objCliente;
            $this->objCarrinhoItem = $objCarrinhoItem;
        }

        // O metodo 'getCliente()' retorna o nome e email que estao na Classe Cliente. Isso eh possivel porque o Objeto 'objCliente' 
        // que foi recebido atraves do construtor, foi passado como parametro quando a Classe CarrinhoCompras foi Instanciada no
        // arquivo 'Checkout.php', conforme eu mencionei acima.
        // Ja que objCliente eh um Objeto do tipo Cliente, ele consegue acessar os metodos 'getNome()' e 'getEmail()' que estao
        // na Classe Cliente no arquivo 'Cliente.php' nas linhas 13 e 17.
        public function getCliente(){
            return $this->objCliente->getNome()." (".$this->objCliente->getEmail().")";
        }


        // Esse eh o metodo mais interessante, pois aqui pode se ver na pratica a utilizacao de dois Objetos.
        //
        // O 'objCarrinhoItem', recebido pelo construtor, conforme explicacao acima, eh um Array de Objetos do tipo CarrinhoItem, 
        // e nao um Objeto unico conforme os outros casos, e isso acontece porque o usuario pode comprar ou comprou mais de um item,
        // entao eu preciso passar mais de um Objeto de uma vez, caso contrario eu teria de ficar Instanciando:
        // *****   $obj1 = new CarrinhoCompras($cliente, $item1)
        // *****   $obj2 = new CarrinhoCompras($cliente, $item2)
        // *****   $obj3 = new CarrinhoCompras($cliente, $item3)
        //
        // Fica mais facil, rapido e legivel se fizermos 
        // *****   $obj1 = new CarrinhoCompras($cliente, [$item1,$item2,$item3,etc]) como voces podem ver na linha 27 do arquivo 'Checkout.php'
        //
        // Mas a pergunta eh, porque passar os itens do carrinho como objeto?
        // Porque cada item possui mais de um tipo de informacao/propriedades, alem de metodos, como por exemplo, quantidade,
        // descricao, valor, getItem(), getQuantidade(), etc, entao por causa disso passamos o Objeto inteiro ao inves de 
        // passar variavel por variavel, alem de que nao teriamos como passar os metodos, entao passando os itens comprados atraves
        // de objetos, teremos acesso a todas as informacoes necessarias para utilizar nosso carrinho de compras, pois agora o objeto inteiro
        // esta disponivel para trabalharmos.
        // 
        // Agora vamos ver a facilidade na pratica:
        // A funcao 'foreach' le o Array de Objetos objCarrinhoItem, pois queremos pegar um objeto de item por vez, ja que o usuario
        // comprou mais de um item.
        // Para cada objeto objCarrinhoItem lido, esse objeto eh armazenado dentro da varial $objItemSelecionado, que passa a conter um objeto
        // do tipo objCarrinhoItem que eh do tipo CarrinhoItem. Se $objItemSelecionado eh agora do tipo CarrinhoItem, entao agora ele consegue 
        // acessar as propriedades dessa Classe, por isso ele pode chamar o metodo 'getItem()' que esta la na Classe CarrinhoItem.php.
        //
        // Agora a parte legal
        //
        // Como o metodo 'getItem()' retorna(return) um OBJETO do tipo Produto(veja a linha 27 do arquivo CarrinhoItem.php), entao o metodo
        // 'getItem()' consegue acessar as propriedades ou metodos desse Objeto que ele retorna, e por isso vemos o metodo 'getItem()' apontando ->
        // para um metodo que esta dentro da Classe Produto, no arquivo Produto.php, que eh o 'getDescricaoProduto()', e assim temos a descricao
        // do produto que esta dentro da Classe Produto.
        //
        // Resumindo: CarrinhoCompras recebeu o objeto CarrinhoItem, que ja havia recebido o objeto Produto.
        // Entao CarrinhoCompras -> CarrinhoItem -> Produto, que eh o mesmo que $objItemSelecionado->getItem()->getDescricaoProduto(), conforme abaixo. 
        // Com isso, simplesmente damos um 'echo' cada vez que o 'foreach' pega um item, tendo assim a descricao de todos os produtos escolhidos pelo usuario/form
        public function listar(){
            echo "<ul>";
            foreach($this->objCarrinhoItem as $objItemSelecionado){
                echo "<li>";
                echo "Produto: " .$objItemSelecionado->getItem()->getDescricaoProduto();
                echo " - Quantidade: " .$objItemSelecionado->getQuantidade();
                echo " - Valor do Item:" .$objItemSelecionado->getItem()->getValorProduto();
                echo " - Valor do Frete: " .$objItemSelecionado->getItem()->getValorFrete();
                echo "</li>";
            }
            echo "</ul>";
        }

        // Aqui nao tem misterio. Contamos a quantidade de objetos CarrinhoItem recebidos dentro do Array. [$item1, $item2, $item3,etc]
        // no momento da instancia do objeto, conforme pode ser visto na linha 27 do checkout.php.
        public function getQuantidadeDeItens(){
            return count($this->objCarrinhoItem);
        }

        // O mesmo dos anteriores, apenas uma formula para calcular o total das compras chamando o metodo 'getTotalItem()'
        // que ja possui o total por item
        public function valorTotal(){
            $valorTotal = 0;
            foreach ($this->objCarrinhoItem as $objItemSelecionado){                                            
                $valorTotal += $objItemSelecionado->getTotalItem();
            }
            return $valorTotal;

        }


    }


?>