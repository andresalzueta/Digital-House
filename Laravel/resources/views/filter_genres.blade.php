@extends('layouts.master')

@section('content')
    <div class="container mt-2">
        <h1 align="center">{{ $msgtitulo }}</h1>
        {{csrf_field()}}

        @if (isset($sucesso) && $sucesso)
                @php $msgclass="alert alert-success" @endphp
        @elseif(count($errors) > 0 ) 
                @php $msgclass="alert alert-warning" @endphp
        @else
                @php $msgclass="alert alert-info" @endphp
        @endif  
        
        <div class="{{ $msgclass }}">
                    <h2 align="center">{{ $msgstatus }}</h2>
        </div>

        <h3>Tabela com filtro</h3>
        <p>Digite algo no campo de filtro para pesquisar a tabela por nome:</p>  
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        {{csrf_field()}}
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gênero</th>
                    <th>Ranking</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($generos as $genero )
                    <tr>
                        <td>{{ $genero->id }}</td>
                        <td>{{ $genero->name }}</td>
                        <td>{{ $genero->ranking }}</td>
                        <td><a href="{{ url('/') }}/genre/edit/{{ $genero->id }}">Editar</a></td>
                        <td><a href="{{ url('/') }}/genre/predelete/{{ $genero->id }}">Deletar</a></td>
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