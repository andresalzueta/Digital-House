@extends('layouts.master')

@section('conteudo')

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

    <form class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="editarFilme" name="editarFilme" method="POST" action="{{$action}}" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field($metodo)}}
        <div class="form-group  {{ $msgclass }}">
            <h2 align="center">{{ $msgstatus }}</h2>
        </div>
        <div class="row">
            <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-1">
                <label for="id">ID do Ator</label>
                <input type="number" class="form-control disabled" id="id" name="id" min="1" step="1" value="{{ $ator->id }}" placeholder="ID" readonly>
            </div>
            <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-1">
                <label for="first_name">Nome</label>
                <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $ator->first_name }}" placeholder="Insira Nome do Ator" readonly/>
            </div>
            <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-1">
                <label for="last_name">Sobrenome</label>
                <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $ator->last_name }}" placeholder=" Sobrenome do Ator" readonly/>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-2">
                <label for="rating">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" step="0.1" value="{{ $ator->rating }}" placeholder=" rating" readonly/>
            </div>
            <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-1 ">
                <label for="favorite_movie_id">Filme favorito</label>
                <input type="text" class="form-control" name="favorite_movie_id" id="favorite_movie_id" value="{{ $ator->getFilme_Favorito['title']}}" placeholder="Filme favorito do Ator" readonly/>
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
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <button type="submit" name="submit" class="btn btn-primary">{{ $msgbotao }}</button>	
            </div>
        </div>

        <h3>Filmes do Ator</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Gênero</th>
                    <th>Exibir</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach($ator->filmes as $filme )
                    <tr>
                        <td>{{ $filme->id }}</td>
                        <td>{{ $filme->title }}</td>
                        <td>{{ $filme->genero['name'] }}</td>
                        <td><a href="/Digital-House/Laravel/public/movie/read/{{ $filme->id }}">Exibir</a></td>
                        <td><a href="/Digital-House/Laravel/public/movie/edit/{{ $filme->id }}">Editar</a></td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
        <p>Criado em 16/08/2018.</p>
    </form>
</div>
</div>

@endsection
