<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;
use App\Movie;

class ActorController extends Controller
{
    // Teste da aula 38 - 6/08/2018
    // movies_db.actors[id, created_at, updated_at, first_name, last_name, rating, favorite_movie_id]

    public function index() {
        // 
        $atores = Actor::paginate(5);
      
        //$filmes = Movie::orderBy('title')->paginate(10);
        //$filmes = Movie::inRandomOrdery()->paginate(10);

        $metodo = "GET";
        $msgtitulo = "Index dos Atores";
        $msgstatus = "Escolha Exibir, Editar ou Excluir";
        
        return view('index_actors')
            ->with('atores', $atores)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function directory() {
        // Atores é uma classe criada a partir de uma classe abstrata Model que manipula a tabela actors no banco movies_db
        // $atores = Actor::orderBy('first_name')->get();
        $atores = Actor::all();     
        $metodo = "GET";
        $msgtitulo = "Lista dos Atores";
        $msgstatus = "Escolha Exibir, Editar ou Excluir";
        
        return view('filter_actors')
            ->with('atores',$atores)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function new() {
        // 
        $metodo = "PUT";
        $msgtitulo = "1. Inserir Novo Ator";
        $msgstatus = "Preencha todos os dados";
        $msgbotao = "Inserir ->";
        $sucesso = null;
        $action="/Digital-House/Laravel/public/actor/create";
         
        $ator = new Actor; 
        $ator->first_name = old('first_name');
        $ator->last_name = old('last_name');
        $ator->rating = old('rating');
        $ator->favorite_movie_id = old('favorite_movie_id');
       
        return view('form_actor')
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('ator',$ator)
        ;
    }

    public function create(Request $request) {
        //
        $this->validate($request,[
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'rating' => 'numeric|min:0|max:10',
            'favorite_movie_id' => 'numeric|min:0',
        ]);

        $ator = Actor::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'rating' => $request->input('rating'),
            'favorite_movie_id' => $request->input('favorite_movie_id'),
        ]);
        $result = $ator->save();

        $metodo = "PATCH";
        $msgtitulo = "2. Inserido Novo Ator";
        $msgbotao = "Atualizar ->";
        
        if ($result) {
            $msgstatus = "Ator cadastrado com sucesso!";
            $action="/Digital-House/Laravel/public/actor/update/$ator->id";
            $sucesso=true;
        } else {
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar o ator, tente novamente!";
            $action="/Digital-House/Laravel/public/actor/create/";
            $sucesso=false;
        }     
        return view('form_actor')
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('ator',$ator)
        ;
    }

    public function read($id) {
        // 
        $ator = Actor::find($id);
        $metodo = "GET";
        $msgtitulo = "3. Leia dados do Ator";
        $msgstatus = "Confira os dados abaixo";
        $msgbotao = "Retornar->";
        $action="/Digital-House/Laravel/public/actors";
        $sucesso = null;

        return view('show_actor')
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('ator',$ator)
        ;
    }

    public function edit($id) {
        // 
        $ator = Actor::find($id);
        $metodo = "PATCH";
        $msgtitulo = "4. Edite dados do Ator";
        $msgstatus = "Edite os dados abaixo";
        $msgbotao = "Atualizar->";
        $action="/Digital-House/Laravel/public/actor/update/$ator->id";
        $sucesso = null;

        return view('form_actor')
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('ator',$ator)
        ;
    }

    public function update(Request $request, $id) {
        //
        $ator = Actor::find($id);
        $ator->first_name = $request->input('first_name');
        $ator->last_name = $request->input('last_name');
        $ator->rating = $request->input('rating');
        $ator->favorite_movie_id = $request->input('favorite_movie_id');
        //$release_date = date_create_from_format('Y-m-d', $request->input('release_date'));
        
        $metodo = "PATCH";
        $msgtitulo = "5. Atualizar dados do Ator";
        $msgstatus = "Edite os dados abaixo";
        $action="/Digital-House/Laravel/public/actor/update/$ator->id";
        $msgbotao = "Atualizar ->";

        $result = $ator->save();

        if ($result) {
            $msgstatus = "Ator atualizado com sucesso!";
            $sucesso=true;
            //return redirect('filter_actors');
        } else {
            //return view('form_movie')->with('request',$request);
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar o ator, tente novamente!";
            $sucesso=false;
        }     
        return view('form_actor')
        ->with('metodo',$metodo)
        ->with('action',$action)
        ->with('sucesso',$sucesso)
        ->with('msgtitulo',$msgtitulo)   
        ->with('msgstatus',$msgstatus)
        ->with('msgbotao',$msgbotao)
        ->with('ator',$ator)
        ;

    }

    public function preDelete($id) {
        // 
        $ator = Actor::find($id);
        $metodo = "DELETE";
        $msgtitulo = "6. Confirmar Deleção do Ator";
        $msgstatus = "Confirma deleção do ator abaixo ?";     
        $msgbotao = "Deletar ->";
        $sucesso=null;
        $action="/Digital-House/Laravel/public/actor/delete/$ator->id";

        return view('form_actor')
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('ator',$ator)
        ;
    }

    public function delete ($id) {
        $ator = Actor::find($id);
        $metodo = "DELETE";
        $msgtitulo = "7. Deletar Ator";
        $msgbotao = "Deletar->";

        $result = $ator->delete();
        if ($result) {
            $msgstatus = "Ator excluído com sucesso!";
            $sucesso=true;
            return redirect('actors');
        } else {
            //return view('form_movie')->with('request',$request);
            $msgstatus = "Ops, ocorreu um erro ao tentar excluir o gênero, tente novamente!";
            $action="/Digital-House/Laravel/public/actor/update/$ator->id";
            $sucesso=false;
            return view('form_actor')
                ->with('metodo',$metodo)
                ->with('action',$action)
                ->with('sucesso',$sucesso)
                ->with('msgtitulo',$msgtitulo)   
                ->with('msgstatus',$msgstatus)
                ->with('msgbotao',$msgbotao)
                ->with('ator',$ator)
            ;
        }     
    }

    public function showid($id) {
        // Ator é uma classe criada a partir de uma classe abstrata Model que manipula a tabela actors no banco movies_db
        $ator = Actor::find($id);
        $resultado = $ator->getNomeCompleto();

        return view('ator')
            ->with('id',$id)
            ->with('nomeDoAtor',$resultado);
    }

}
