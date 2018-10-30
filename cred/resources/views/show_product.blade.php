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
            <div class="col-3">
                <img src="{{ url('/') }}/{{ $product->image }}" class="figure-img img-fluid rounded imgProduto" alt="{{ $product->name }}">
            </div>
            
            <div class="col-1">
                
            </div>
            
            <div class="col-4">
                    <h4 style="">{{ $product->name }}</h2>
                    <p style="">Código: {{ $product->product_id }}</p>
                    <p>Marca: {{ $product->brand['name']}}</p>    
                    <p>Categoria: {{ $product->category['name']}}</p>
            
            </div>

            <div class="col-3">
                    <button type="submit" name="submit" class="btn btn-primary ">
                                <h4 style="text-align: center;">R$ {{ $product->price }}</h2>
                                <h6 style="text-align: center;">em até 5x sem juros</h6>
                                <p class="textoEuQuero"><i class="fas fa-shopping-cart"></i>   Eu quero!</p
                                
                                {{ $msgbotao }}
                    </button>           
            </div>
        </div>
    </form>
</div>
</div>

@endsection
