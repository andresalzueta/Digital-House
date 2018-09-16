@extends('layouts.master')

@section('content')
    
    <div class="container mt-2">
        <h1 align="center" class="Title1Product">{{ $msgtitulo }}</h1>
            @if (isset($sucesso) && $sucesso)
                @php $msgclass="alert alert-success" @endphp
            @elseif(count($errors) > 0 ) 
                @php $msgclass="alert alert-warning" @endphp
            @else
                @php $msgclass="alert alert-info" @endphp
            @endif  
        <div class="campoProduct {{ $msgclass }}">
                    <h2 align="center" class="Title2Product">{{ $msgstatus }}</h2>
        </div>
        
        <h3>Tabela com filtro</h3>
        <p>Digite algo no campo de filtro para pesquisar a tabela por nome, ou id:</p>  
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        {{csrf_field()}}
        <br>
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
        <p>Atualizado em 09/09/2018.</p>
        
        <script>
            //Note que iniciamos a pesquisa em tbody, para prevenir o filtro da linha de cabeçalho.
            $(document).ready(function(){
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
    </div>

@endsection