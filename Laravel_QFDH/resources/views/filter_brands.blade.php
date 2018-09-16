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
        <div class="campoBrand {{ $msgclass }}">
                    <h2 align="center" class='Title2Brand'>{{ $msgstatus }}</h2>
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
                    <th>Nome da Marca</th>
                    <th>Descrição</th>
                    <th>Ativa</th>
                    <th>Exibir</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>

            <tbody id="myTable">
                @foreach($brands as $brand )
                    <tr>    
                        <td>{{ $brand->id }}</td>
                        <td>{{ $brand->name }}</td>
                        <td>{{ $brand->description }}</td>
                        <td>{{ $brand->active }}</td>
                        <td><a href="{{ url('/') }}/brand/read/{{ $brand->id }}">Exibir</a></td>
                        <td><a href="{{ url('/') }}/brand/edit/{{ $brand->id }}">Editar</a></td>
                        <td><a href="{{ url('/') }}/brand/predelete/{{ $brand->id }}">Deletar</a></td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
        <p>Note que iniciamos a pesquisa em tbody, para prevenir o filtro da linha de cabeçalho.</p>
        
        <script>
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