<html lang="{{ app()->getLocale() }}">
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Filme</title>
    </head>

    <body>
        <div class="container form-group">
            <h1 align="center">{{ $msgtitulo }}</h1>


                @if (isset($sucesso) && $sucesso)
                    @php $msgclass="alert alert-success" @endphp
                @elseif(count($errors) > 0 ) 
                    @php $msgclass="alert alert-warning" @endphp
                @else
                    @php $msgclass="alert alert-info" @endphp
                @endif
                
            <form id="adicionarFilme" name="adicionarFilme" method="POST" action="{{$action}}">
                {{csrf_field()}}
                <div class="form-group col-6 m-auto {{ $msgclass }}">
                        <h2 align="center">{{ $msgstatus }}</h2>
                </div>
                <div class="form-group col-6 m-auto">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" placeholder="Insira título do filme"/>
                    <label for="rating">Classificação</label>
                    <input type="number" class="form-control" id="rating" name="rating" step="0.1" value="{{ old('rating') }}" placeholder="Insira rating"/>
                    <label for="awards">Prêmios</label>
                    <input type="number" class="form-control" id="awards" name="awards" step="1" value="{{ old('awards') }}" placeholder="Insira awards"/>
                    <label for="length">Duração</label>
                    <input type="number" class="form-control" id="length" name="length" step="1" value="{{ old('length') }}" placeholder="Defina tamanho do filme">
                    <label for="genre_id">Data de estreia</label>
		    		<input type="date" class="form-control" id="release_date" name="release_date" min="1900-01-01" value="{{ old('release_date') }}" placeholder="Insira Data de Lançamento">
                    <label for="genre_id">Gênero</label>
					<select class="form-control" name="genre_id" id="genre_id">
   						@foreach ($filme->generos() as $genero) 
       			            <option value="{{ $genero->id }}" 
                                @if( $genero->id == $filme->genre_id )
                                    {{"selected"}}
                                @endif
                                >{{ $genero->id ."-" .$genero->name}}
                            </option>
						@endforeach
                    </select>
                    @if (count($errors) > 0 ) 
                        <div class="alert alert-danger">
                            <h3 align="left">Corrija os erros abaixo:</h3>
                            <ul> 
                              @foreach($errors->all() as  $error)
                                <li>{{ $error }}</li>
                              @endforeach
                            </ul>
                        </div>
                    @endif
                </div>    
                <br>
                <div class="form-group col-6 m-auto">
                    <input type="submit" value="Enviar->" name="submit" class="btn btn-primary"/>
                </div>
            </form>
        </div>
    </body>
</html>
