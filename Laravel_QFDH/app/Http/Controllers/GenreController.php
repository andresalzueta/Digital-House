<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genre;

class GenreController extends Controller
{
    // Teste da aula 40 - 9/08/2018
    // movies_db.genres[movies_db.genres[id, created_at, updated_at, name, ranking, active]]

    public function directory() {
        // 
        $generos = Genre::all();
        $metodo = "GET";
        $msgtitulo = "Lista dos Gêneros";
        $msgstatus = "Escolha Editar ou Excluir";
        
        return view('filter_genres')
            ->with('generos', $generos)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ;
    }

    public function new() {
        // 
        $metodo = "PUT";
        $msgtitulo = "1.Inserir Novo Gênero";
        $msgstatus = "Preencha todos os dados";
        $msgbotao = "Inserir->";
        $sucesso = null;
        $action=url('/')."/genre/create";
         
        $genero = new Genre; 
        $genero->name = old('name');
        $genero->ranking = old('ranking');
        $genero->active = old('active');
       
        return view('form_genre')
                ->with('metodo',$metodo)
                ->with('action',$action)
                ->with('sucesso',$sucesso)
                ->with('msgtitulo',$msgtitulo)   
                ->with('msgstatus',$msgstatus)
                ->with('msgbotao',$msgbotao)
                ->with('genero',$genero)
        ;
    }

    public function create(Request $request) {
        //
        $this->validate($request,[
            'name' => 'required|unique:genres|min:3|max:255',
            'ranking' => 'numeric|min:0|max:10',
            'active' => 'numeric|min:0|max:1',
        ]);

        $genero = Genre::create([
            'name' => $request->input('name'),
            'ranking' => $request->input('ranking'),
            'active' => $request->input('active'),
        ]);
        $result = $genero->save();

        $metodo = "PATCH";
        $msgtitulo = "2.Inserido Novo genero";
        $msgbotao = "Atualizar->";
        
        if ($result) {
            $msgstatus = "Gênero cadastrado com sucesso!";
            $action=url('/')."/genre/update/$genero->id";
            $sucesso=true;
        } else {
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar o genero, tente novamente!";
            $action=url('/')."/genre/create/";
            $sucesso=false;
        }     
        return view('form_genre')
                ->with('metodo',$metodo)
                ->with('action',$action)
                ->with('sucesso',$sucesso)
                ->with('msgtitulo',$msgtitulo)   
                ->with('msgstatus',$msgstatus)
                ->with('msgbotao',$msgbotao)
                ->with('genero',$genero)
            ;
    }

    public function read($id) {
        // 
        $genero = Genre::find($id);
        $metodo = "GET";
        $msgtitulo = "3. Exibe dados do Gênero";
        $msgstatus = "Confira os dados abaixo";
        $msgbotao = "Retornar ->";
        $action=url('/')."/genres";
        $sucesso = null;

        return view('form_genre')
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('genero',$genero)
            ;
    }

    public function edit($id) {
        // 
        $genero = Genre::find($id);
        $metodo = "PATCH";
        $msgtitulo = "4. Edite dados do Gênero";
        $msgstatus = "Edite os dados abaixo";
        $msgbotao = "Atualizar->";
        $action=url('/')."/genre/update/$genero->id";
        $sucesso = null;

        return view('form_genre')
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('genero',$genero)
            ;
    }

    public function update(Request $request, $id) {
        //
        $genero = Genre::find($id);
        $genero->name = $request->input('name');
        $genero->ranking = $request->input('ranking');
        $genero->active = $request->input('active');
        //$release_date = date_create_from_format('Y-m-d', $request->input('release_date'));
        
        $metodo = "PATCH";
        $msgtitulo = "5. Atualizar dados do genero";
        $msgstatus = "Edite os dados abaixo";
        $msgbotao = "Atualizar->";

        $result = $genero->save();

        if ($result) {
            $msgstatus = "Gênero atualizado com sucesso!";
            $action=url('/')."/genre/update/$genero->id";
            $sucesso=true;
            //return redirect('filter_genres');
        } else {
            //return view('form_movie')->with('request',$request);
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar o genero, tente novamente!";
            $action=url('/')."/genre/update/$genero->id";
            $sucesso=false;
        }     
        return view('form_genre')
                ->with('metodo',$metodo)
                ->with('action',$action)
                ->with('sucesso',$sucesso)
                ->with('msgtitulo',$msgtitulo)   
                ->with('msgstatus',$msgstatus)
                ->with('msgbotao',$msgbotao)
                ->with('genero',$genero)
        ;
    }

    public function preDelete($id) {
        // 
        $genero = Genre::find($id);
        $metodo = "DELETE";
        $msgtitulo = "6. Deletar genero";
        $msgstatus = "Confirme deleção do genero abaixo:";     
        $msgbotao = "Deletar->";
        $sucesso=null;
        $action=url('/')."/genre/delete/$genero->id";

        return view('form_genre')
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('genero',$genero)
        ;
    }

    public function delete($id) {
        $genero = Genre::find($id);
        $metodo = "DELETE";
        $msgtitulo = "7. Destroy Gênero";
        $msgbotao = "Deletar->";
        $result = $genero->delete();

        if ($result) {
            $msgstatus = "Gênero excluído com sucesso!";
            $sucesso=true;
            return redirect('genres');
        } else {
            //return view('form_movie')->with('request',$request);
            $msgstatus = "Ops, ocorreu um erro ao tentar excluir o gênero, tente novamente!";
            $action=url('/')."/genre/update/$genero->id";
            $sucesso=false;
            return view('form_genre')
                ->with('metodo',$metodo)
                ->with('action',$action)
                ->with('sucesso',$sucesso)
                ->with('msgtitulo',$msgtitulo)   
                ->with('msgstatus',$msgstatus)
                ->with('msgbotao',$msgbotao)
                ->with('genero',$genero)
            ;
        }     
    }
}