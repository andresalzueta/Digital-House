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

    <form class="form-group col-12" id="form" name="show_role" method="POST" action="{{$action}}" enctype="multipart/form-data">
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
                <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}" placeholder="Insira Nome de Categoria" readonly>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="order">Ordem de Exibição</label>
                <input type="number" class="form-control disabled" order="order" name="order" min="0" step="1" value="{{ $category->order }}" placeholder="order" readonly>
            </div>
            <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <label for="description">Descrição da Categoria</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $category->description }}" placeholder="Insira descrição da Categoria" readonly>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="active">Ativa (Sim/Não)</label>
                <input type="hidden" class="form-control" id="active" name="active" value="0" readonly>
                @if (isset($category->active) && $category->active)
                    <input type="checkbox" class="form-control" id="active" name="active" value="1" checked="{{ $category->active }}" placeholder="Ativo" readonly>    
                @else
                    <input type="checkbox" class="form-control" id="active" name="active" value="0" placeholder="Ativo" readonly>    
                @endif
            </div>
            <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <label for="image">Imagem da Categoria</label>
                <img src="{{ url('/') }}/{{ $category->image }}" class="sizeImg" alt="{{ $category->name }}" width="265px" height="265px">
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

        <h3>Produtos desta Categoria</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código do Produto</th>
                    <th>Nome do Produto</th>
                    <th>Exibir</th>
                    <th>Editar</th>
                </tr>
            </thead>

            <tbody id="myTable">
                @foreach($category->products as $product )
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->product_id }}</td>
                        <td>{{ $product->name }}</td>
                        <td><a href="{{ url('/') }}/product/read/{{ $product->id }}">Exibir</a></td>
                        <td><a href="{{ url('/') }}/product/edit/{{ $product->id }}">Editar</a></td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
        <p>Criado em 05/09/2018.</p>

    </form>
</div>
</div>

@endsection
