<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\User;
use App\Role;

class UserController extends Controller
{
    // movies_db.users[[id, name, email, password, remember_token, created_at, updated_at]

    public function index() {
        // 
        $users = User::paginate(5);
        //$users = Movie::orderBy('name')->paginate(10);
        //$users = Movie::inRandomOrdery()->paginate(10);

        $metodo = "GET";
        $msgtitulo = "Index dos Usuários";
        $msgstatus = "Escolha Exibir, Editar ou Excluir";
        
        return view('index_users')
            ->with('users', $users)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function directory() {
        // users é uma classe criada a partir de uma classe abstrata Model que manipula a tabela Users no banco movies_db
        // $users = User::orderBy('name')->get();
        $users = User::all();     
        $metodo = "GET";
        $msgtitulo = "Lista dos Usuários";
        $msgstatus = "Escolha Exibir, Editar ou Excluir";
        
        return view('filter_users')
            ->with('users',$users)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function new() {
        // 
        $metodo = "PUT";
        $msgtitulo = "1. Inserir Novo Usuário";
        $msgstatus = "Preencha todos os dados";
        $msgbotao = "Inserir ->";
        $sucesso = null;
        $action=url('/')."/user/create";
        
        $user = new User;
        
        $user->name = old('name');
        $user->email = old('email');
        $user->password = old('password');
        $user->remember_token = old('remember_token');
        // os campos ['email_confirm'] ['password_confirm'] não existem na tabela users, portanto precisam ser criados no objeto
        $user->fill(['email_confirm' => null ]);
        $user->fill(['password_confirm' => null ]);
        $user->email_confirm = old('email_confirm');
        $user->password_confirm = old('password_confirm');

        $view="form_user";
        return view( $view )
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('user',$user)
        ;
    }

    public function create(Request $request) {
        // $fillable = ['name', 'email', 'password', 'remember_token'];
        $this->validate($request,[
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|min:6|max:255|unique:users',
            'email_confirm' => 'required_with:email|same:email|min:6',
            'password' => 'required|min:6|max:64',
            'password_confirm' => 'required_with:password|same:password|min:6',
            'remember_token' => 'required|min:6|max:64',
        ]);

        $algoritmo = PASSWORD_DEFAULT;
		$senha = password_hash($request->input('password'), $algoritmo);
        
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $senha,
            'remember_token' => $request->input('remember_token'),
        ]);
        $result = $user->save();

        $msgtitulo = "2. Inserido Novo Usuário";
        
        if ($result) {
            $metodo = "GET";
            $msgstatus = "Usuário cadastrado com sucesso!";
            $msgbotao = "Retornar ->";
            $action=url('/')."/users";  
            $sucesso=true;
            $view="show_user";
        } else {
            $metodo = "PUT";
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar o usuário, tente novamente!";
            $action=url('/')."/user/create/";
            $sucesso=false;
            $msgbotao = "Inserir ->";
            $view="form_user";
        }     
        return view($view)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('user',$user)
        ;
    }

    public function read($id) {
        // 
        $user = User::find($id);

        $metodo = "GET";
        $msgtitulo = "3. Leia dados do Usuário";
        $msgbotao = "Retornar ->";
        $sucesso = null;
        $action=url('/')."/users";
        $view="show_user";

        if ($user) {  
            $user->fill(['email_confirm' => $user->email ]);
            $user->fill(['password_confirm' => $user->password ]);
    
            $msgstatus = "Confira os dados abaixo";
        } else {
            $msgstatus = "Usuário não localizado";
            $user = new User;
        }

        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('user',$user)
        ;
    }

    public function edit($id) {
        // 
        $user = User::find($id);
        //$user->fill(['email_confirm' => $user->email ]);
        //$user->fill(['password_confirm' => $user->password ]);
        $user->email_confirm = $user->email;
        $user->password_confirm = $user->password;

        $metodo = "PATCH";
        $msgtitulo = "4. Edite dados do Usuário";
        $msgstatus = "Edite os dados abaixo";
        $msgbotao = "Atualizar ->";
        $action=url('/')."/user/update/$user->id";
        $sucesso = null;
        $view="form_user";
        return view( $view )
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('user',$user)
        ;
    }

    public function update(Request $request, $id) {
        //

        $user = User::find($id);
        // os campos ['email_confirm'] ['password_confirm'] não existem na tabela users, portanto precisam ser criados no objeto
        
        $this->validate($request,[
            'email' => Rule::unique('users')->ignore($user->email, 'email'),    
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:6|max:255',
            'email_confirm' => 'required_with:email|same:email|min:6',
            'password' => 'required|min:6|max:64',
            'password_confirm' => 'required_with:password|same:password|min:6',
            'remember_token' => 'required|min:6|max:64',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->remember_token = $request->input('remember_token');
        // save() faz Update dos dados no banco de dados   
        $result = $user->save();         
        $msgtitulo = "5. Atualizar dados do Usuário";
        
        if ($result) {
            $metodo = "GET";
            $msgstatus = "Usuário atualizado com sucesso!";
            $msgbotao = "Retornar ->";
            $action=url('/')."/users";  
            $sucesso=true;
            $view='show_user';
        } else {
            $metodo = "PATCH";
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar o usuário, tente novamente!";
            $action=url('/')."/user/update/$user->id";
            $sucesso=false;
            $msgbotao = "Atualizar ->";
            $view="form_user";
        }     
        return view($view)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('user',$user)
        ;
    }

    public function preDelete(Request $request, $id) {
        //Check role
        $role = $request->user()->authorizeRoles('admin');
        //Check role
        $user = User::find($id);
        $metodo = "DELETE";
        $msgtitulo = "6. Confirmar Deleção do Usuário";
        $msgstatus = "Confirma deleção do usuário abaixo ?";     
        $msgbotao = "Deletar ->";
        $sucesso=null;
        $action=url('/')."/user/delete/$user->id";
        $view="show_user";
        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('user',$user)
        ;
    }

    public function delete ($id) {
        $user = User::find($id);
        $msgtitulo = "7. Deletar Usuário";
        $msgstatus = "Usuário $user->name excluído com sucesso!";  
        $userid = $user->id;
        $result = $user->delete();
        //$result = User::destroy($id);
        if ( $result) {
            $metodo = "GET";
            $msgbotao = "Retornar ->";
            $action=url('/')."/users/";
            $sucesso=true;
            $user = new User;
        } else {
            $metodo = "GET";
            $msgstatus = "Ops, ocorreu um erro ao tentar excluir o usuário, tente novamente!";
            $action=url('/')."/user/preDelete/$userid";
            $msgbotao = "Deletar ->";
            $sucesso=false;
        }     
        $view="show_user";
        
        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('user',$user)
        ;
    }
}
