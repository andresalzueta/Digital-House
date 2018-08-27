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

    <form class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="editarFilme" name="editarFilme" method="POST" action="{{$action}}" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field($metodo)}}
        <div class="form-group  {{ $msgclass }}" role="alert">
            <h2 align="center">{{ $msgstatus }}</h2>
        </div>
        <div class="row">
            <div class="form-group col-lg-3 col-md-3 col-sm-1 col-xs-1">
                <label for="id">ID do Filme</label>
                <input type="number" class="form-control disabled" id="id" name="id" min="1" step="1" value="{{ $filme->id }}" placeholder="ID" readonly>
            </div>
            <div class="form-group col-lg-9 col-md-9 col-sm-9 col-xs-1">
                <label for="title">Título</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $filme->title }}" placeholder="Insira título do filme" readonly/>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-3">
                <label for="awards">Prêmios</label>
                <input type="number" class="form-control" id="awards" name="awards" step="1" min="0" max="99" value="{{ $filme->awards }}" placeholder="Insira awards" readonly/>
            </div>
            <div class="form-group col-sm-3">
                <label for="rating">Classificação</label>
                <input type="number" class="form-control" id="rating" name="rating" step="0.1" value="{{ $filme->rating }}" placeholder="Insira rating" readonly/>
            </div>
            <div class="form-group col-sm-3">
                <label for="length">Duração do filme</label>
                <input type="number" class="form-control" id="length" name="length" step="1" min="10" max="999" value="{{ $filme->length }}" placeholder="Defina tamanho do filme" readonly>
            </div>
            <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-1 ">
                <label for="genre_id">Gênero</label>
                <input type="text" class="form-control" id="genre_id" name="genre_id" value="{{ $filme->genero['name'] }}" placeholder="Gênero do filme" readonly>
           </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-3">
                <label for="revenue">Bilheteria</label>
                <input type="number" class="form-control" id="revenue" name="revenue" step="1" min="0" max="99999999" value="{{ $filme->revenue }}" placeholder="Insira bilheteria" readonly/>
            </div>
            <div class="form-group col-sm-3">
                <label for="genre_id">Data de estreia</label>
                <input type="date" class="form-control" id="release_date" name="release_date" min="1900-01-01" value="{{ $filme->getReleaseDateToInput() }}" placeholder="Insira Data de Lançamento" readonly> 
            </div>
            <div class="form-group col-sm-3">
                <label for="created_at">Criação do Registro</label>
                <input type="text" class="form-control disabled" id="created_at" name="created_at" value="{{ $filme->created_at }}" placeholder="Data de Registro" readonly>
            </div>
            <div class="form-group col-sm-3">
                <label for="updated_at">Última Atualização</label>
                <input type="text" class="form-control disabled" id="updated_at" name="updated_at" value="{{ $filme->updated_at }}" placeholder="Data de Atualização" readonly>
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

        <h3>Atores do Filme</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Completo do Ator</th>
                    <th>Rating</th>
                    <th>Filme Favorito</th>
                    <th>Exibir</th>
                    <th>Editar</th>
                </tr>
            </thead>

            <tbody id="myTable">
                @foreach($filme->atores as $actor )
                    <tr>
                        <td>{{ $actor->id }}</td>
                        <td>{{ $actor->getNomeCompleto() }}</td>
                        <td>{{ $actor->rating }}</td>
                        <td>{{ $actor->getFilme_Favorito['title'] }}</td>
                        <td><a href="{{ url('/') }}/actor/read/{{ $actor->id }}">Exibir</a></td>
                        <td><a href="{{ url('/') }}/actor/edit/{{ $actor->id }}">Editar</a></td>
                    </tr>
                @endforeach                
            </tbody>
        </table>
        <p>Criado em 16/08/2018.</p>



    </form>
</div>
</div>

@endsection
