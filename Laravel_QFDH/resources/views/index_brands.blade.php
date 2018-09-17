@extends('layouts.master')

@section('content')
    
    <div class="container mt-2">
        <h1 align="center" class='Title1Brand'>{{ $msgtitulo }}</h1>
            @if (isset($sucesso) && $sucesso)
                @php $msgclass="alert alert-success" @endphp
            @elseif(count($errors) > 0 ) 
                @php $msgclass="alert alert-warning" @endphp
            @else
                @php $msgclass="alert alert-info" @endphp
            @endif  
        <div class="campoBrand {{ $msgclass }}" role="alert">
                    <h2 align="center" class='Title2Brand'>{{ $msgstatus }}</h2>
        </div>
        
        <div class="container-fluid mt-2 justify-content-center">
            <section class="vip-products row justify-content-left">      
                @foreach($brands as $brand )
                    <article class="product col-xs-12 col-sm-6 col-md-4 col-lg-3 center">
                        <img src="{{ url('/') }}/{{ $brand->image }}" class="sizeImg" alt="{{ $brand->name }}" width="265px" height="265px">
                        <!-- <h2>Produto 01</h2> -->
                        <h2>{{ $brand->name }}</h2>
                        <p>{{ $brand->description }}</p>
                        <a href="{{ url('/') }}/products_bybrand/{{ $brand->id }}">
                            <button type="button" onclick="location.href = {{ url('/') }}/products_bybrand/{{ $brand->id }}" name="{{ $brand->name }}" class="btn btn-primary">{{ $brand->name }}</button>
                        </a>                      	
                    </article>
                @endforeach                
            </section>

            {{ $brands->links() }}

        </div>     

    </div>

@endsection