@extends('layouts.master')

@section('content')
    
    <div class="container mt-2">
        <h1 align="center" class='Title1Category'>{{ $msgtitulo }}</h1>
            @if (isset($sucesso) && $sucesso)
                @php $msgclass="alert alert-success" @endphp
            @elseif(count($errors) > 0 ) 
                @php $msgclass="alert alert-warning" @endphp
            @else
                @php $msgclass="alert alert-info" @endphp
            @endif  
        <div class="campoCategory {{ $msgclass }}" role="alert">
                    <h2 align="center" class='Title2Category'>{{ $msgstatus }}</h2>
        </div>
        <div class="container-fluid mt-2 justify-content-center">
            <section class="vip-products row ">      
                @foreach($categories as $category )
                    <article class="product col-xs-12 col-sm-6 col-md-4 col-lg-3 center">
                        <img src="{{ $category->image }}" class="sizeImg" alt="{{ $category->name }}" width="265px" height="265px">
                        <!-- <h2>Produto 01</h2> -->
                        <h2>{{ $category->name }}</h2>
                        <p>{{ $category->description }}</p>
                        <a href="{{ url('/') }}/category/read/{{ $category->id }}">
                            <button type="button" onclick="location.href = {{ url('/') }}/category/read/{{ $category->id }}" name="{{ $category->name }}" class="btn btn-primary">{{ $category->name }}</button>
                        </a>                      	
                    </article>
                @endforeach                
            </section>
            <p>Criado em 05/09/2018.</p>

            {{ $categories->links() }}
            <p>Note que basta incluir o link de paginação acima.</p>
        </div>
    </div>

@endsection