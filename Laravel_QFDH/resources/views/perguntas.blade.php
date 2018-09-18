@extends('layouts.master')

@section('content')

<div class="container">
  <div class="row">
    <div class="c-widget__header col-12">
        <h1 class="text-center" >
          <p class="font-weight-light">Perguntas Frequentes</p>
        </h1>
    </div>
  </div>
</div>

<div class="container">
  <div class="perguntas_accordion">
    <div id="accordion" style="text-align: center">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Posso comprar pelo telefone?
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
              Prefere comprar por telefone? Ligue para o nosso serviço de televendas no número (11) 7070-7070. Descreva o produto que você deseja para que um de nossos atendentes possa lhe ajudar na pesquisa e passar todas as informações necessárias. O serviço funciona de segunda a sábado, das 8h às 20h, exceto feriados.
              <br>
              Gostou das nossas sugestões? Ótimo! Para finalizar sua compra, tenha em mãos os seguintes dados:
              <br>
              – Endereço para entrega e cobrança;
              <br>
              – Número do cartão de crédito, caso opte por essa forma de pagamento;
              <br>
              – Número do CPF;
              <br>
              – Endereço de e-mail.
              <br>
              Para telefone fixo, o custo é de uma ligação local + impostos, conforme o estado de origem. Para celular, o custo é de uma ligação + impostos, de acordo com sua operadora.
              <br>
              Importante! As compras feitas por telefone seguem as mesmas condições de prazo de entrega, disponibilidade de produtos, preços e frete das compras online.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Como são calculados os pontos do programa Multiplus?
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
              Especializada em programas de fidelidade com o cliente, a Multiplus possui um sistema em que todas as compras de produtos e serviços feitas nos parceiros membros da rede podem se transformar em pontos que poderão ser resgatados posteriormente.
              <br>
              A cada R$ 1 em compras você receberá 3 pontos Multiplus. Essa proporção pode mudar em algumas ocasiões devido às promoções. Para ganhar seus pontos, você deve necessariamente efetuar a compra pelo link: www.qhdh.com.br/multiplus.
              <br>
              Após a finalização, os pontos serão creditados na sua conta em até 30 dias. Para consultar seu saldo ou resgatá-lo, acesse o site da Multiplus e solicite um extrato ou a troca dos pontos por um cupom.
              <br>
              Quando receber o valor do cupom de desconto, acesse o site Resgate Multiplus para usá-lo. Nesse link, consta o passo a passo para você realizar a compra.
              <br>
              Caso tenha dúvidas, por favor, ligue para a Central de Atendimento Multiplus nos telefones:
              <br>
              Brasil - 0300 700 7070
              <br>
              Exterior - 55 11 2370 7070
              <br>
              Você também pode consultar as regras nos links abaixo:
              <br>
              Multiplus Fidelidade
              <br>
              Multiplus Fidelidade Fale Conosco
              <br>
              Importante! A compra de produtos marketplace não acarreta em acúmulo de pontos Multiplus. No caso de compras mistas, serão atribuídos pontos considerando apenas produtos Quarteto Fantástico DH.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Quais são as dicas para comprar na Black Friday?
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
              - Nem todos os produtos fazem parte da Black Friday. Os itens participantes estarão identificados com o selo da Black Friday durante o período de vigência da promoção.
            <br>
              - A QFDH comercializa produtos de parceiros por meio do marketplace. Os itens participantes da Black Friday estarão identificados com o selo da campanha.
            <br> 
              - Os descontos dos produtos participantes da Black Friday não são cumulativos com outras promoções ou cupons vigentes no site.
            <br>
              - Os descontos dos produtos participantes da Black Friday são válidos somente durante o período de vigência da campanha e/ou enquanto durar o estoque.
            <br>
              - Colocar o produto no carrinho não garante a reserva do item. O produto só é reservado quando a compra é finalizada.
            <br>
              - As formas de pagamento durante o período da Black Friday serão as mesmas já praticadas, porém, algumas opções como débito online e cartão de débito podem estar indisponíveis.
            <br>
              - Nosso site é seguro e segue rigorosos protocolos de segurança. Acesse sempre por meio de canais oficiais. Verifique o endereço do site antes de comprar. Se desconfiar de sites, e-mails e mensagens falsas, entre em contato com nosso canal de atendimento. 
            <br>
              - Fique atento ao prazo de entrega informado para seu CEP, disponível para consulta na página do produto ou durante o processo de compra. A Black Friday é uma data especial e, em razão da alta demanda, trabalhamos com prazos diferentes do habitual.
            <br>
              - Dúvidas, sugestões e/ou reclamações podem ser encaminhas para nossa central de atendimento por meio do site.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="c-widget__header col-12">
        <div class="text-center" >
          <a href="{{route('contato')}}">Entrar em Contato</a>
          <br><br>
          <a  href="http://localhost:8000/home">Voltar Home</a>
      </div>
    </div>
  </div>
</div>

@endsection

