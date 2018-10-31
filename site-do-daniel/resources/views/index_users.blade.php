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
                    <th>Nome do Usuário</th>
                    <th>Email</th>
                    <th>Exibir</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>

            <tbody id="myTable">
                @foreach($users as $user )
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="{{ url('/') }}/actor/read/{{ $user->id }}">Exibir</a></td>
                        <td><a href="{{ url('/') }}/actor/edit/{{ $user->id }}">Editar</a></td>
                        <td><a href="{{ url('/') }}/actor/predelete/{{ $user->id }}">Deletar</a></td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
        <p>Criado em 16/08/2018.</p>

        {{ $atores->links() }}
        <p>Note que basta incluir o link de paginação acima.</p>

    </div>

@endsection