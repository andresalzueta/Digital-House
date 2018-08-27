<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
use App\Genre;
use App\Actor;

class MovieController extends Controller
{
    // Teste da aula 38 - 6/08/2018
    // movies_db.movies[id, created_at, updated_at, title, rating, awards, release_date, length, genre_id]

    public function directory() {
        // 
        $filmes = Movie::all();
        $metodo = "GET";
        $msgtitulo = "Lista de Filmes";
        $msgstatus = "Escolha Exibir, Editar ou Excluir";
        
        return view('filter_movies')
            ->with('filmes', $filmes)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function index() {
        // 
        $filmes = Movie::paginate(5);
      
        //$filmes = Movie::orderBy('title')->paginate(10);
        //$filmes = Movie::inRandomOrdery()->paginate(10);

        $metodo = "GET";
        $msgtitulo = "Index dos Filmes";
        $msgstatus = "Escolha Exibir, Editar ou Excluir";
        
        return view('index_movies')
            ->with('filmes', $filmes)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function new() {
        // 
        $metodo = "PUT";
        $msgtitulo = "1. Inserir Novo Filme";
        $msgstatus = "Preencha todos os dados";
        $msgbotao = "Inserir->";
        $action=url('/')."/movie/create";
                
        $filme = new Movie; 
        //$filme = $filme->getFillArray();
            //$filme->id = 0;
            $filme->title = old('title');
            $filme->rating = old('rating');
            $filme->awards = old('awards');
            $filme->length = old('length');
            $filme->genre_id = old('genre_id');
            //$filme->director_id = old('director_id');
            $filme->revenue = old('revenue');
            $filme->release_date = old('release_date');
            
            //$filme->created_at = null;
            //$filme->updated_at = null;
            //$release_date = date_create_from_format('Y-m-d', $request->input('release_date'));
        $generos = Genre::all();

        $sucesso = null;

        return view('form_movie')
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('filme',$filme)
            ->with('generos', $generos)
        ;
    }

    public function create(Request $request) {
        //
        $this->validate($request,[
            'title' => 'required|unique:movies|min:3|max:255',
            'rating' => 'numeric|min:0|max:10',
            'awards' => 'numeric|min:0|max:99',
            'lenght' => 'numeric|min:0|max:99',
            'revenue' => 'numeric|min:0|max:99999',
            'release_date' => 'date',
            'genre_id' => 'numeric|min:0|max:99',
            //'director_id' => 'numeric|min:0',
        ]);

        $filme = Movie::create([
            'title' => $request->input('title'),
            'rating' => $request->input('rating'),
            'awards' => $request->input('awards'),
            'length' => $request->input('length'),
            'revenue' => $request->input('revenue'),
            'release_date' => $request->input('release_date'),
            'genre_id' => $request->input('genre_id'),
            //'director_id' => $request->input('director_id'),
        ]);

        $result = $filme->save();
        $metodo = "PATCH";
        $msgtitulo = "2. Inserido Novo Filme";
        $msgbotao = "Atualizar->";
        
        if ($result) {
            $msgstatus = "Filme cadastrado com sucesso!";
            $action=url('/')."/movie/update/$filme->id";
            $sucesso = true;
        } else {
            //return view('form_movie')->with('request',$request);
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar o Filme, tente novamente!";
            $action=url('/')."/movie/create/";
            $sucesso = false;
        }     
        return view('form_movie')
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('filme',$filme)
        ;
    }

    public function read($id) {
        // 
        $filme = Movie::find($id);
        $metodo = "GET";
        $msgtitulo = "3. Exibir dados do Filme";
        $msgbotao = "Retornar->";

        if ($filme) {  
            $msgstatus = "Confira os dados abaixo";
            $action=url('/')."/movies";     
        } else {
            $msgstatus = "Filme não localizado";
            $action=url('/')."/movies";   
            $filme = new Movie;
            // return redirect('movies');
        }
        return view('show_movie')
            ->with('filme', $filme)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
        ;     
    }

    public function edit($id) {
        // 
        $filme = Movie::find($id);
        $metodo = "PATCH";
        $msgtitulo = "4. Edite dados do Filme";
        $msgstatus = "Edite os dados abaixo";
        $msgbotao = "Atualizar->";
        $action=url('/')."/movie/update/$filme->id";

        return view('form_movie')
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('filme', $filme)
            ;
    }


    public function update(Request $request, $id) {
        //
        $filme = Movie::find($id);
        $filme->title = $request->input('title');
        $filme->rating = $request->input('rating');
        $filme->awards = $request->input('awards');
        $filme->length = $request->input('length');
        $filme->genre_id = $request->input('genre_id');
        $filme->revenue = $request->input('revenue');
        $filme->release_date = $request->input('release_date');
        //$release_date = date_create_from_format('Y-m-d', $request->input('release_date'));
        
        $metodo = "PATCH";
        $msgtitulo = "5. Atualizar dados do Filme";
        $msgbotao = "Atualizar->";
        $action=url('/')."/movie/update/$filme->id";
        $result = $filme->save();

        if ($result) {
            $msgstatus = "Filme atualizado com sucesso!";
            $sucesso = true;
            //return redirect('show_movies');
        } else {
            //return view('form_movie')->with('request',$request);
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar o Filme, tente novamente!";
            $sucesso = false;
        }     
        return view('form_movie')
        ->with('metodo',$metodo)
        ->with('sucesso',$sucesso)
        ->with('filme',$filme)
        ->with('action',$action)
        ->with('msgtitulo',$msgtitulo)   
        ->with('msgstatus',$msgstatus)
        ->with('msgbotao',$msgbotao)
        ;
    }

    public function preDelete($id) {
        // 
        $filme = Movie::find($id);
        $metodo = "DELETE";
        $msgtitulo = "6. Deletar Filme";
        $msgstatus = "Confirme deleção do filme abaixo:";   
        $msgbotao = "Deletar->";  
        $action=url('/')."/movie/delete/$filme->id";

        return view('form_movie')
            ->with('filme', $filme)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ;
    }

    public function delete($id) {
        $filme = Movie::find($id);
        //$metodo = "DELETE";
        $metodo = "GET";
        $msgtitulo = "7. Deletar Filme";
        $msgstatus = "Filme deletado:";
        $msgbotao = "Retornar->";     
        $action=url('/')."/movie/read/$filme->id";
        $result = $filme->delete();

        if ($result) {
            $msgstatus = "Filme excluído com sucesso!";
            //Flash::message('Filme excluído com sucesso!');
            return redirect('movies');
        } else {
            //return view('form_movie')->with('request',$request);
            $msgstatus = "Ops, ocorreu um erro ao tentar excluir o Filme, tente novamente!";
            return view('show_movie')
                ->with('metodo',$metodo)
                ->with('action',$action)
                ->with('msgtitulo',$msgtitulo)   
                ->with('msgstatus',$msgstatus)
                ->with('msgbotao',$msgbotao)
                ->with('filme', $filme)
            ;     
        }     
    }

    public function searchID($id) {
        // Movie é uma classe criada a partir de uma classe abstrata Model que manipula uma tabela movies no banco movies_db
        $filme = Movie::find($id);
        $resultado = $filme->title;
        return view('filme')->with('nomeDoFilme',$resultado);
    }

    public function searchName($nome) {

        // $filme = Movie::where('title','=',$nome)->first();
        $filme = Movie::where('title','LIKE', '%'.$nome.'%')->get();
 
        $metodo = "GET";
        $msgtitulo = "Filmes filtrados por Nome";
        
        if ($filme){
            $msgstatus = "Escolha Editar ou Excluir";
        } else {
            $msgstatus = "Nenhum filme localizado";
        }
        //return view('show_movies')->with('filmes',$resultado);

        return view('show_movies')
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('filmes', $filmes)
            ;
    }
}