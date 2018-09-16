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
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Ativo</th>
                    <th>Exibir</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>

            <tbody id="myTable">
                @foreach($products as $product )
                    <tr>    
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->product_id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->active }}</td>
                        <td><a href="{{ url('/') }}/product/read/{{ $product->id }}">Exibir</a></td>
                        <td><a href="{{ url('/') }}/product/edit/{{ $product->id }}">Editar</a></td>
                        <td><a href="{{ url('/') }}/product/predelete/{{ $product->id }}">Deletar</a></td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
        <p>Criado em 05/09/2018.</p>

        {{ $products->links() }}
        <p>Note que basta incluir o link de paginação acima.</p>

    </div>

@endsection