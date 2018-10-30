@extends('layouts.master')

@section('content')

<div class="container">
<h1 align="center" class='Title1Category'>{{ $msgtitulo }}</h1>

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
        <div class="campoCategory form-group  {{ $msgclass }}" role="alert">
            <h2 align="center" class='Title2Category'>{{ $msgstatus }}</h2>
        </div>
        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="id">ID da Categoria</label>
                <input type="number" class="form-control disabled" id="id" name="id" min="0" step="1" value="{{ $category->id }}" placeholder="ID" readonly>
            </div>
            <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <label for="name">Nome da Categoria</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}" placeholder="Insira Nome de Categoria" />
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="order">Ordem de Exibição</label>
                <input type="number" class="form-control disabled" order="order" name="order" min="0" step="1" value="{{ $category->order }}" placeholder="Ordem">
            </div>
            <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <label for="description">Descrição da Categoria</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $category->description }}" placeholder="Insira descrição da Categoria" />            
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="active">Ativa (Sim/Não)</label>
                <input type="hidden" class="form-control" id="active" name="active" value="0" />
                @if (isset($category->active) && $category->active)
                    <input type="checkbox" class="form-control" id="active" name="active" value="1" checked="{{ $category->active }}" placeholder="Ativo" />    
                @else
                    <input type="checkbox" class="form-control" id="active" name="active" value="1" placeholder="Ativo" />    
                @endif
            </div>
            <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <label for="image">Imagem da Categoria</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $category->image }}" placeholder="Insira imagem da Categoria" />
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
