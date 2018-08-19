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
                <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $ator->first_name }}" placeholder="Insira Nome do Ator"/>
            </div>
            <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-1">
                <label for="last_name">Sobrenome</label>
                <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $ator->last_name }}" placeholder="Insira Sobrenome do Ator"/>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-2">
                <label for="rating">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" step="0.1" value="{{ $ator->rating }}" placeholder="Insira rating"/>
            </div>
            <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-1 ">
                <label for="favorite_movie_id">Filme favorito</label>
                <select class="form-control" name="favorite_movie_id" id="favorite_movie_id">
                    @foreach ($ator->getFilmes() as $filme_favorito) 
                        <option value="{{ $filme_favorito->id }}" 
                            @if( $filme_favorito->id == $ator->favorite_movie_id )
                                {{"selected"}}
                            @endif
                            >{{ $filme_favorito->id ."-" .$filme_favorito->title}}
                        </option>
                    @endforeach
                </select>
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
    </form>
</div>
</div>

@endsection
