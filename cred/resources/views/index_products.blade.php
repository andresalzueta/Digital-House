@extends('layouts.master')

@section('content')
    
    <div class="container mt-2">
        <h1 class="Title1Product" align="center">{{ $msgtitulo }}</h1>
            @if (isset($sucesso) && $sucesso)
                @php $msgclass="alert alert-success" @endphp
            @elseif(count($errors) > 0 ) 
                @php $msgclass="alert alert-warning" @endphp
            @else
                @php $msgclass="alert alert-info" @endphp
            @endif  
        <div class="campoProduct {{ $msgclass }}" role="alert">
                    <h2 class="Title2Product" align="center">{{ $msgstatus }}</h2>
        </div>
        
        <div class="container-fluid mt-2 justify-content-center">
            <section class="vip-products row ">      
                @foreach($products as $product )
                    <article class="product col-xs-12 col-sm-6 col-md-4 col-lg-3 center">
                        <img src="{{ url('/') }}/{{ $product->image }}" class="sizeImg" alt="{{ $product->name }}" width="265px" height="265px">
                        <!-- <h2>Produto 01</h2> -->
                        <h2>{{ $product->name }}</h2>
                        <p>{{ $product->description }}</p>
                        <a href="{{ url('/') }}/product/show/{{ $product->id }}">
                            <button type="button" onclick="location.href = {{ url('/') }}/product/read/{{ $product->id }}" name="{{ $product->name }}" class="btn btn-primary">{{ $product->name }}</button>
                        </a>                      	
                    </article>
                @endforeach                
            </section>

            {{ $products->links() }}
            
        </div>
    </div>
@endsection