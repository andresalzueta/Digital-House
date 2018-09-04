@extends('layouts.master')

@section('content')

<div class="container">
<h1 align="center">{{ $msgtitulo }}</h1>

@if (isset($sucesso) && $sucesso)
    @php $msgclass="alert alert-success" @endphp
@elseif(count($errors) > 0 ) 
    @php $msgclass="alert alert-warning" @endphp
@else
    @php $msgclass="alert alert-info" @endphp
@endif
<div class="row">

    <form class="form-group col-12" id="form" name="form_user" method="POST" action="{{$action}}" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field($metodo)}}
        <div class="form-group  {{ $msgclass }}" role="alert">
            <h2 align="center">{{ $msgstatus }}</h2>
        </div>

        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="id">ID do Cliente</label>
                <input type="number" class="form-control disabled" id="id" name="id" value="{{ $customer->id }}" placeholder="ID" readonly>
            </div>
            <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <label for="first_name">Nome</label>
                <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $customer->first_name }}" placeholder="Insira nome do cliente"/>
            </div>
            <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <label for="last_name">Sobrenome</label>
                <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $customer->last_name }}" placeholder="Insira sobrenome do cliente"/>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="user_id">ID do Usuário</label>
                <input type="number" class="form-control disabled" id="user_id" name="user_id" value="{{ $customer->user_id }}" placeholder="user_id" readonly>
            </div>
            <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <label for="cpf_cnpj">CPF / CNPJ </label>
                <input type="text" class="form-control" name="cpf_cnpj" id="cpf_cnpj" value="{{ $customer->cpf_cnpj }}" placeholder="Insira CPF/CNPJ do cliente"/>
            </div>
            <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <label for="birthday">Data de Nascimento / Fundação</label>
                <input type="date" class="form-control" name="birthday" id="birthday" value="{{ $customer->birthday }}" placeholder="Insira nascimento"/>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="gender">Sexo</label>
                <select class="form-control" name="gender" id="gender">
                        @foreach ($customer->genders() as $gender) 
                            <option value="{{ $gender }}" 
                                @if( $gender == $customer->gender )
                                {{"selected"}}
                                @endif
                                >{{ $gender }}
                            </option>
                        @endforeach
                </select>
            </div>
            <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" name="phone" id="phone" value="{{ $customer->phone }}" placeholder="Insira telefone"/>
            </div>
            <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $customer->email }}" placeholder="Insira email"/>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="zipcode">CEP</label>
                <input type="text" class="form-control disabled" id="zipcode" name="zipcode" value="{{ $customer->zipcode }}" placeholder="CEP" />
            </div>
            <div class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <label for="address">Endereço</label>
                <input type="text" class="form-control" name="address" id="address" value="{{ $customer->address }}" placeholder="Insira endereço"/>
            </div>
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="address_number">Número</label>
                <input type="text" class="form-control" name="address_number" id="address_number" value="{{ $customer->address_number }}" placeholder="Número"/>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <label for="address_complement">Complemento</label>
                <input type="text" class="form-control" name="address_complement" id="address_complement" value="{{ $customer->address_complement }}" placeholder="Complemento"/>
            </div>
            <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <label for="city">Cidade</label>
                <input type="text" class="form-control disabled" id="city" name="city" value="{{ $customer->city }}" placeholder="Cidade" />
            </div>

            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="state">Estado</label>
                <select class="form-control" name="state" id="state">
                        @foreach ($customer->states() as $state) 
                            <option value="{{ $state }}" 
                                @if( $state == $customer->state )
                                {{"selected"}}
                                @endif
                                >{{ $state }}
                            </option>
                        @endforeach
                </select>
            </div>
          
        </div>

        <div class="row">
            <div class="form-group col-12">    
            @if (count($errors) > 0 ) 
                <div class="alert alert-danger">
                    <ul> 
                        @foreach($errors->all() as  $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>    
        </div>
        <div class="row"> 
            <div class="form-group col-12 ">
                <button type="submit" name="submit" class="btn btn-primary">{{ $msgbotao }}</button>	
            </div>
        </div>

        <p>Criado em 19/08/2018.</p>
    </form>
</div>
</div>

@endsection
