@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="col-lg-12">
      <div class="userBox center-block">
        <form action="/contato_atendente" method="post">
          {!!csrf_field()!!}
          <div class="container-fluid">
            <div class="contactData row col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <label class="contactLabel col-4"> Nome
                <br>
                <input class="fieldLabel" type="text" name="nome" placeholder="Nome Completo">
                <br>
              </label>
              <br>
              <label class="contactLabel col-4"> Email
                <br>
                <input class="fieldLabel" type="email" name="email" placeholder="seuemail@mail.com">
                <br>
              </label>
              <br>
              <label class="contactLabel col-4"> Telefone
                <br>
                <input  class="fieldLabel" type="number" name="telefone" placeholder="+55(11)99000-0000">
                <br>
              </label>
              <br>
            </div>
           </div>
           <div class="container-fluid">
            <div class="contactData row col-12  col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <label class="contactLabel col-4"> Data Nascimento
                <br>
                <input class="fieldLabel" type="date" name="data_nascimento" placeholder="00/00/0000">
                <br>
              </label>
              <br>
              <label class="contactLabel col-4"> Cidade
                <br>
                <input class="fieldLabel" type="text" name="cidade" placeholder="Cidade">
                <br>
              </label>
              <br>
              <label class="contactLabel col-4"> Cep
                <br>
                <input  class="fieldLabel" type="number" name="cep" placeholder="00000-000">
                <br>
              </label>
              <br>
            </div>
           </div>
          

          <Label> Motivo do Contato
            <select class="userBordas" name="motivo_contato">
                <option>Selecione um assunto</option>
                <option value="Entrega">Entrega</option>
                <option value="Pagamento">Pagamento</option>
                <option value="Devolução">Devolução</option>
                <option value="Outros">Outros</option>
            </select>
          </Label>
          <br>
          <br>
          <label>Mensagem
            <br>
            <textarea class="userBordas" name="Mensagem"> </textarea>
          </label>
          <br>
          <br>
          <label> Aceito receber novidades
            <Input type="checkbox" name="novidades" value="1">
            </Input>
          </label>
          <br>
          <br>
          <button class="userBordas" type="reset">Limpar</button>
          <button  class="userBordas" type="submit">Enviar</button>
    </form>
  </div> <!-- <div class="loginBox center-block">-->
</div> <!-- </div colunas>-->
</div> <!-- </div container>-->
<br>
<br>
@endsection