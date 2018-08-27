@extends('layouts.master')

@section('content')

<div class="container">
<h1 align="center">{{ $msgtitulo }}</h1>

@if (isset($sucesso) && $sucesso)
    @php $msgclass="alert alert-success" @endphp
@elseif(count($errors) > 0 ) 
    @php $msgclass="alert alert-warning" @endphp
@else
    @php $msgclass="alert alert-info" @endphp
@endif
<div class="row">

    <form class="form-group col-12" id="form" name="show_role" method="POST" action="{{$action}}" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field($metodo)}}
        <div class="form-group  {{ $msgclass }}" role="alert">
            <h2 align="center">{{ $msgstatus }}</h2>
        </div>
        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <label for="id">ID da Função</label>
                <input type="number" class="form-control disabled" id="id" name="id" min="0" step="1" value="{{ $role->id }}" placeholder="ID" readonly>
            </div>
            <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <label for="name">Nome da Função</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $role->name }}" placeholder="name" readonly/>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-12 col-md-12col-sm-12 col-xs-12">
                <label for="description">Descrição das Funções de Usuários</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $role->description }}" placeholder=" description" readonly>
            </div>
        </div>
            
        <div class="row">
            <div class="form-group col-12">    
            @if (count($errors) > 0 ) 
                <div class="alert alert-danger">
                    <ul> 
                        @foreach($errors->all() as  $error)
                        <li>{{ $error }}</li>
                        @endforeach 
                    </ul>
                </div>
                @endif
            </div>    
        </div>
        <div class="row"> 
            <div class="form-group col-12 ">
                <button type="submit" name="submit" class="btn btn-primary">{{ $msgbotao }}</button>	
            </div>
        </div>

        <h3>Usuários nesta Função</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Usuário</th>
                    <th>Email</th>
                    <th>Exibir</th>
                    <th>Editar</th>
                </tr>
            </thead>

            <tbody id="myTable">
                @foreach($role->users as $user )
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="{{ url('/') }}/user/read/{{ $user->id }}">Exibir</a></td>
                        <td><a href="{{ url('/') }}/user/edit/{{ $user->id }}">Editar</a></td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
        <p>Criado em 26/08/2018.</p>

    </form>
</div>
</div>

@endsection
