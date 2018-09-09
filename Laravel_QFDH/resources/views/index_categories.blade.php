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
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th>Ordem</th>
                    <th>Ativa</th>
                    <th>Exibir</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>

            <tbody id="myTable">
                @foreach($categories as $category )
                    <tr>    
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->order }}</td>
                        <td>{{ $category->active }}</td>
                        <td><a href="{{ url('/') }}/category/read/{{ $category->id }}">Exibir</a></td>
                        <td><a href="{{ url('/') }}/category/edit/{{ $category->id }}">Editar</a></td>
                        <td><a href="{{ url('/') }}/category/predelete/{{ $category->id }}">Deletar</a></td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
        <p>Criado em 05/09/2018.</p>

        {{ $categories->links() }}
        <p>Note que basta incluir o link de paginação acima.</p>

    </div>

@endsection