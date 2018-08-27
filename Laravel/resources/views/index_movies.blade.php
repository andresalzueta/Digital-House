@extends('layouts.master')

@section('content')
    <div class="container mt-2">
        <h1 align="center">{{ $msgtitulo }}</h1>
            @if (isset($sucesso) && $sucesso)
                @php $msgclass="alert alert-success" @endphp
            @elseif(count($errors) > 0 ) 
                @php $msgclass="alert alert-warning" @endphp
            @else
                @php $msgclass="alert alert-info" @endphp
            @endif  
        <div class="{{ $msgclass }}" role="alert">
                    <h2 align="center">{{ $msgstatus }}</h2>
        </div>
        
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Gênero</th>
                    <th>Exibir</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($filmes as $filme )
                    <tr>
                        <td>{{ $filme->id }}</td>
                        <td>{{ $filme->title }}</td>
                        <td>{{ $filme->genre_id .' - ' .$filme->genero['name'] }}</td>
                        <td><a href="{{ url('/') }}/movie/read/{{ $filme->id }}">Exibir</a></td>
                        <td><a href="{{ url('/') }}/movie/edit/{{ $filme->id }}">Editar</a></td>
                        <td><a href="{{ url('/') }}/movie/preDelete/{{ $filme->id }}">Deletar</a></td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
        <p>Criado em 16/08/2018.</p>
        
        {{ $filmes->links() }}
        <p>Note que basta incluir o link de paginação acima.</p>
    </div>
@endsection