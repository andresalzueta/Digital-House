@extends('layouts.master')

@section('content')

<div class="container">
<h1 align="center" class="Title1Product">{{ $msgtitulo }}</h1>

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
        <div class="campoProduct form-group  {{ $msgclass }}" role="alert">
            <h2 align="center" class="Title2Product">{{ $msgstatus }}</h2>
        </div>
        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="id">ID do Produto</label>
                <input type="number" class="form-control disabled" id="id" name="id" min="0" step="1" value="{{ $product->id }}" placeholder="ID" readonly>
            </div>
            <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <label for="name">Nome do Produto</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}" placeholder="Insira Nome de Produto" />
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="product_id">Código do Produto</label>
                <input type="text" class="form-control disabled" id="product_id" name="product_id" value="{{ $product->product_id }}" placeholder="Código">
            </div>
            <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <label for="description">Descrição do Produto</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}" placeholder="Insira descrição do Produto" />            
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <label for="category_id">Categoria</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach ($product->categories() as $category) 
                        <option value="{{ $category->id }}" 
                            @if( $category->id == $product->category_id )
                            {{"selected"}}
                            @endif
                            >{{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>          
            <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <label for="brand_id">Marca</label>
                <select class="form-control" name="brand_id" id="brand_id">
                    @foreach ($product->brands() as $brand) 
                        <option value="{{ $brand->id }}" 
                            @if( $brand->id == $product->brand_id )
                            {{"selected"}}
                            @endif
                            >{{ $brand->name }}
                        </option>
                    @endforeach
                </select>


            </div>
            <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <label for="price">Preço</label>
                <input type="number" class="form-control disabled" id="price" name="price" min="0" value="{{ $product->price }}" placeholder="Preço">
            </div>

        </div>

        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="active">Ativa (Sim/Não)</label>
                <input type="hidden" class="form-control" id="active" name="active" value="0" />
                @if (isset($product->active) && $product->active)
                    <input type="checkbox" class="form-control" id="active" name="active" value="1" checked="{{ $product->active }}" placeholder="Ativo" />    
                @else
                    <input type="checkbox" class="form-control" id="active" name="active" value="1" placeholder="Ativo" />    
                @endif
            </div>
            <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <label for="image">Imagem do Produto</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $product->image }}" placeholder="Insira imagem do Produto" />
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
