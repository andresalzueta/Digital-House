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
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Completo do Ator</th>
                    <th>Rating</th>
                    <th>Filme Favorito</th>
                    <th>Exibir</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>

            <tbody id="myTable">
                @foreach($atores as $ator )
                    <tr>
                        <td>{{ $ator->id }}</td>
                        <td>{{ $ator->getNomeCompleto() }}</td>
                        <td>{{ $ator->rating }}</td>
                        <td>{{ $ator->getFilme_Favorito['title'] }}</td>
                        <td><a href="{{ url('/') }}/actor/read/{{ $ator->id }}">Exibir</a></td>
                        <td><a href="{{ url('/') }}/actor/edit/{{ $ator->id }}">Editar</a></td>
                        <td><a href="{{ url('/') }}/actor/predelete/{{ $ator->id }}">Deletar</a></td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
        <p>Criado em 16/08/2018.</p>

        {{ $atores->links() }}
        <p>Note que basta incluir o link de paginação acima.</p>

    </div>

@endsection