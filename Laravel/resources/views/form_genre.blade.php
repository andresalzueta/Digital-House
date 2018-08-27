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

        <form class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="editarGenero" name="editarGenero" method="POST" action="{{$action}}" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field($metodo)}}
            <div class="form-group  {{ $msgclass }}" role="alert">
                <h2 align="center">{{ $msgstatus }}</h2>
            </div>
            <div class="row">
                <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-1">
                    <label for="id">ID</label>
                    <input type="number" class="form-control disabled" id="id" name="id" min="1" step="1" value="{{ $genero->id }}" placeholder="ID" readonly>
                </div>
                <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-1">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $genero->name }}" placeholder="Insira título do gênero"/>
                </div>

            </div>
            <div class="row">
                <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-1">
                    <label for="ranking">Ranking</label>
                    <input type="number" class="form-control" id="ranking" name="ranking" step="0.1" value="{{ $genero->ranking }}" placeholder="Insira ranking"/>
                </div>
                <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-1">
                    <label for="active">1-Ativo ou 0-Inativo</label>
                    <input type="number" class="form-control" id="active" name="active" step="1" min="0" max="1" value="{{ $genero->active }}" placeholder="Ativo ou Inativo"/>
                </div>

                <div class="form-group col-sm-4">
                    <label for="created_at">Criação do Registro</label>
                    <input type="text" class="form-control disabled" id="created_at" name="created_at" value="{{ $genero->created_at }}" placeholder="Data de Registro" readonly>
                </div>
                <div class="form-group col-sm-4">
                    <label for="updated_at">Última Atualização</label>
                    <input type="text" class="form-control disabled" id="updated_at" name="updated_at" value="{{ $genero->updated_at }}" placeholder="Data de Atualização" readonly>                        
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