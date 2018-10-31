@extends('layouts.master')

@section('content')

<div class="container">
<h1 align="center" class="Title1Product">{{ $msgtitulo }}</h1>

{{-- @if (isset($sucesso) && $sucesso)
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
                <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}" placeholder="Insira Nome de Produto" readonly>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="product_id">Código do Produto</label>
                <input type="text" class="form-control disabled" id="product_id" name="product_id" value="{{ $product->product_id }}" placeholder="Código">
            </div>
            <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <label for="description">Descrição do Produto</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}" placeholder="Insira descrição do Produto" readonly>            
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <label for="category_id">Categoria</label>
                <input type="text" class="form-control disabled" id="category_id" name="category_id" value="{{ $product->category['name']}}" placeholder="Categoria">
            </div>
            <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <label for="brand_id">Marca</label>
                <input type="text" class="form-control disabled" id="brand_id" name="brand_id" value="{{ $product->brand['name']}}" placeholder="Marca">
            </div>
            <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <label for="price">Preço</label>
                <input type="number" class="form-control disabled" id="price" name="price" min="0" value="{{ $product->price }}" placeholder="Preço">
            </div>

        </div>

        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="active">Ativa (Sim/Não)</label>
                <input type="hidden" class="form-control" id="active" name="active" value="0" readonly>
                @if (isset($product->active) && $product->active)
                    <input type="checkbox" class="form-control" id="active" name="active" value="1" checked="{{ $product->active }}" placeholder="Ativo" readonly>    
                @else
                    <input type="checkbox" class="form-control" id="active" name="active" value="1" placeholder="Ativo" readonly>    
                @endif
            </div>
            <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <label for="image">Imagem do Produto</label>
                <img src="{{ url('/') }}/{{ $product->image }}" class="sizeImg" alt="{{ $product->name }}" width="265px" height="265px">
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

        <p>Criado em 09/09/2018.</p>
    </form>
</div>
</div> --}}











@if (isset($sucesso) && $sucesso)
    @php $msgclass="alert alert-success" @endphp
@elseif(count($errors) > 0 ) 
    @php $msgclass="alert alert-warning" @endphp
@else
    @php $msgclass="alert alert-info" @endphp
@endif


    <form class="form-group col-12" id="form" name="form_role" method="POST" action="{{$action}}" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field($metodo)}}
        <div class="campoProduct form-group  {{ $msgclass }}" role="alert">
            <h2 align="center" class="Title2Product">{{ $msgstatus }}</h2>
        </div>
    <div container>
            <div class="row">
                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    {{-- <label for="image">Imagem do Produto</label> --}}
                    <img src="{{ url('/') }}/{{ $product->image }}" class="sizeImg" alt="{{ $product->name }}" width="265px" height="265px">
                </div>
            </div>
        
            <div class="row">
                <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <label for="name">Nome do Produto</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}" placeholder="Insira Nome de Produto" readonly>
                </div>
            </div>
    </div>
            <br>
            <br>

            {{-- <div class="row">
                    <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <label for="description">Descrição do Produto</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}" placeholder="Insira descrição do Produto" readonly>            
                    </di>
                </div> --}}
        


        {{-- <div class="row">
                <div class="row">
                        <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label for="description">Descrição do Produto</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}" placeholder="Insira descrição do Produto" readonly>            
                        </di>
                    </div>

        </div> --}}
    
        
        <div class="row">
            <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <label for="category_id">Categoria</label>
                <input type="text" class="form-control disabled" id="category_id" name="category_id" value="{{ $product->category['name']}}" placeholder="Categoria">
            </div>
            <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <label for="brand_id">Marca</label>
                <input type="text" class="form-control disabled" id="brand_id" name="brand_id" value="{{ $product->brand['name']}}" placeholder="Marca">
            </div>
            <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <label for="price">Preço</label>
                <input type="number" class="form-control disabled" id="price" name="price" min="0" value="{{ $product->price }}" placeholder="Preço">
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

        <p>Criado em 09/09/2018.</p>
    </form>
</div>
</div>
</div>

@endsection
