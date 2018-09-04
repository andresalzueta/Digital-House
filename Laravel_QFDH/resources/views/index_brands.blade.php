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
        <p>Criado em 02/09/2018.</p>

        {{ $brands->links() }}
        <p>Note que basta incluir o link de paginação acima.</p>

    </div>

@endsection