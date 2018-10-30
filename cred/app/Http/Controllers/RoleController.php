<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;
use App\User;

class RoleController extends Controller
{
    //
    public function index() {
        // 
        $roles = Role::paginate(5);
        //$roles = Role:orderBy('name')->paginate(10);
        //$roles = Role:inRandomOrdery()->paginate(10);

        $metodo = "GET";
        $msgtitulo = "Funções de Tipo de Usuário";
        $msgstatus = "Escolha Exibir, Editar ou Excluir";
        
        return view('index_roles')
            ->with('roles', $roles)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function directory() {
        // roles é uma classe criada a partir de uma classe abstrata Model que manipula a tabela roles no banco movies_db
        // $roles = Role::orderBy('name')->get();
        $roles = Role::all();     
        $metodo = "GET";
        $msgtitulo = "Lista das Funções de Tipo de Usuário";
        $msgstatus = "Escolha Exibir, Editar ou Excluir";
        
        return view('filter_roles')
            ->with('roles',$roles)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function new() {
        // 
        $metodo = "PUT";
        $msgtitulo = "1. Inserir Nova Função de Usuário";
        $msgstatus = "Preencha todos os dados";
        $msgbotao = "Inserir ->";
        $sucesso = null;
        $action=url('/')."/role/create";
        
        $role = new Role;
        // xxx_db.roles[id, name, description, created_at, updated_at]
        
        $role->name = old('name');
        $role->description = old('description');

        $view="form_role";
        return view( $view )
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('role',$role)
        ;
    }

    public function create(Request $request) {
        // $fillable = ['name', 'description', 'password', 'remember_token'];
        $this->validate($request,[
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:6|max:255',
        ]);

     
        $role = Role::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
        $result = $role->save();

        $msgtitulo = "2. Inserido Nova Função de Usuário";
        
        if ($result) {
            $metodo = "GET";
            $msgstatus = "Função de usuário cadastrada com sucesso!";
            $msgbotao = "Retornar ->";
            $action=url('/')."/roles";  
            $sucesso=true;
            $view="show_role";
        } else {
            $metodo = "PUT";
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar a função de usuário, tente novamente!";
            $action=url('/')."/role/create/";
            $sucesso=false;
            $msgbotao = "Inserir ->";
            $view="form_role";
        }     
        return view($view)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('role',$role)
        ;
    }

    public function read($id) {
        // 
        $role = Role::find($id);

        $metodo = "GET";
        $msgtitulo = "3. Leia dados de Função de Usuário";
        $msgbotao = "Retornar ->";
        $sucesso = null;
        $action=url('/')."/roles";
        $view="show_role";

        if ($role) {  
            $msgstatus = "Confira os dados abaixo";
        } else {
            $msgstatus = "Função de usuário não localizada";
            $role = new Role;
        }

        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('role',$role)
        ;
    }

    public function edit($id) {
        // 
        $role = Role::find($id);

        $metodo = "PATCH";
        $msgtitulo = "4. Edite dados de Função de Usuário";
        $msgstatus = "Edite os dados abaixo";
        $msgbotao = "Atualizar ->";
        $action=url('/')."/role/update/$role->id";
        $sucesso = null;
        $view="form_role";
        return view( $view )
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('role',$role)
        ;
    }

    public function update(Request $request, $id) {
        //
        $role = Role::find($id);

        $this->validate($request,[
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:6|max:255',
        ]);

        $role->name = $request->input('name');
        $role->description = $request->input('description');
        // save() faz Update dos dados no banco de dados   
        $result = $role->save();         
        $msgtitulo = "5. Atualizar dados de Função de Usuário";
        
        if ($result) {
            $metodo = "GET";
            $msgstatus = "Função de usuário atualizada com sucesso!";
            $msgbotao = "Retornar ->";
            $action=url('/')."/roles";  
            $sucesso=true;
            $view='show_role';
        } else {
            $metodo = "PATCH";
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar a função de usuário, tente novamente!";
            $action=url('/')."/role/update/$role->id";
            $sucesso=false;
            $msgbotao = "Atualizar ->";
            $view="form_role";
        }     
        return view($view)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('role',$role)
        ;
    }

    public function preDelete($id) {
        // 
        $role = Role::find($id);
        $metodo = "DELETE";
        $msgtitulo = "6. Confirmar Deleção de Função de Usuário";
        $msgstatus = "Confirma deleção da função de usuário abaixo ?";     
        $msgbotao = "Deletar ->";
        $sucesso=null;
        $action=url('/')."/role/delete/$role->id";
        $view="show_role";
        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('role',$role)
        ;
    }

    public function delete ($id) {
        $role = Role::find($id);
        $msgtitulo = "7. Deletar Função de Usuário";
        $msgstatus = "Usuário $role->name excluído com sucesso!";  
        $roleid = $role->id;
        $result = $role->delete();
        //$result = Role::destroy($id);
        if ( $result) {
            $metodo = "GET";
            $msgbotao = "Retornar ->";
            $action=url('/')."/roles/";
            $sucesso=true;
            $role = new Role;
        } else {
            $metodo = "GET";
            $msgstatus = "Ops, ocorreu um erro ao tentar excluir o usuário, tente novamente!";
            $action=url('/')."/role/preDelete/$roleid";
            $msgbotao = "Deletar ->";
            $sucesso=false;
        }     
        $view="show_role";
        
        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('role',$role)
        ;
    }
}
