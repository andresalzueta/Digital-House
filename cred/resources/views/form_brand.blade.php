@extends('layouts.master')

@section('content')

<div class="container">
<h1 align="center" class='Title1Brand'>{{ $msgtitulo }}</h1>

@if (isset($sucesso) && $sucesso)
    @php $msgclass="alert alert-success" @endphp
@elseif(count($errors) > 0 ) 
    @php $msgclass="alert alert-warning" @endphp
@else
    @php $msgclass="alert alert-info" @endphp
@endif
<div class="row">

    <form class="form-group col-12" id="form" name="form_role" method="POST" action="{{$action}}" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field($metodo)}}
        <div class="campoBrand form-group  {{ $msgclass }}" role="alert">
            <h2 align="center" class='Title2Brand'>{{ $msgstatus }}</h2>
        </div>
        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="id">ID da Marca</label>
                <input type="number" class="form-control disabled" id="id" name="id" min="0" step="1" value="{{ $brand->id }}" placeholder="ID" readonly>
            </div>
            <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <label for="name">Nome da Marca</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $brand->name }}" placeholder="Insira Nome de Marca" />
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label for="description">Descrição da Marca</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $brand->description }}" placeholder="Insira descrição da marca" />            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="active">Ativa (Sim/Não)</label>
                <input type="hidden" class="form-control" id="active" name="active" value="0" />
                @if (isset($brand->active) && $brand->active)
                    <input type="checkbox" class="form-control" id="active" name="active" value="1" checked="{{ $brand->active }}" placeholder="Ativo" />    
                @else
                    <input type="checkbox" class="form-control" id="active" name="active" value="1" placeholder="Ativo" />    
                @endif
            </div>
            <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <label for="image">Imagem da Marca</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $brand->image }}" placeholder="Insira imagem da marca" />
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

        <p>Criado em 02/09/2018.</p>
    </form>
</div>
</div>

@endsection
