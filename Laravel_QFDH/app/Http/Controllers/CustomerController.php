<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;

class CustomerController extends Controller
{
    //
    // digitalhouse_db.customers[id, created_at, updated_at, user_id, cpf, first_name, last_name, gender,
    //                           birthday, phone, email, address, address_number, adress_complement, city, state, zipcode]

    public function index() {
        // 
        $customers = Customer::paginate(5);
        //$customers = Movie::orderBy('name')->paginate(10);
        //$customers = Movie::inRandomOrdery()->paginate(10);

        $metodo = "GET";
        $msgtitulo = "Index dos Clientes";
        $msgstatus = "Escolha Exibir, Editar ou Excluir";
        
        return view('index_customers')
            ->with('customers', $customers)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function directory() {
        // users é uma classe criada a partir de uma classe abstrata Model que manipula a tabela Users no banco 
        // $customers = Customer::orderBy('name')->get();
        $customers = Customer::all();     
        $metodo = "GET";
        $msgtitulo = "Lista dos Clientes";
        $msgstatus = "Escolha Exibir, Editar ou Excluir";
        
        return view('filter_customers')
            ->with('customers',$customers)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function new() {
        // 
        $metodo = "PUT";
        $msgtitulo = "1. Inserir Novo Cliente";
        $msgstatus = "Preencha todos os dados";
        $msgbotao = "Inserir ->";
        $sucesso = null;
        $action=url('/')."/customer/create";
        
        $customer = new Customer;
             
        $customer->user_id = old('user_id');
        $customer->cpf = old('cpf');
        $customer->first_name = old('first_name');
        $customer->last_name = old('last_name');
        $customer->gender = old('gender');
        $customer->birthday = old('birthday');
        $customer->phone = old('phone');
        $customer->email = old('email');
        $customer->address = old('address');
        $customer->address_number = old('address_number');
        $customer->address_complement = old('address_complement');
        $customer->city = old('city');
        $customer->state = old('state');
        $customer->zipcode = old('zipcode');

        $view="form_customer";
        return view( $view )
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('customer',$customer)
        ;
    }

    public function create(Request $request) {
        // $fillable = [user_id, cpf, first_name, last_name, gender,birthday, phone, email, address, address_number, adress_complement, city, state, zipcode]

        $this->validate($request,[
            'user_id' => 'numeric|min:0',
            'cpf' => 'numeric|required|min:11|max:13',
            'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'email' => 'required|min:6|max:60',

        ]);

        
        $customer = Customer::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);
        $result = $customer->save();

        $msgtitulo = "2. Inserido Novo Cliente";
        
        if ($result) {
            $metodo = "GET";
            $msgstatus = "Cliente cadastrado com sucesso!";
            $msgbotao = "Retornar ->";
            $action=url('/')."/customers";  
            $sucesso=true;
            $view="show_customer";
        } else {
            $metodo = "PUT";
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar o Cliente, tente novamente!";
            $action=url('/')."/customer/create/";
            $sucesso=false;
            $msgbotao = "Inserir ->";
            $view="form_customer";
        }     
        return view($view)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('customer',$customer)
        ;
    }

    public function read($id) {
        // 
        $customer = Customer::find($id);

        $metodo = "GET";
        $msgtitulo = "3. Leia dados do Cliente";
        $msgbotao = "Retornar ->";
        $sucesso = null;
        $action=url('/')."/customers";
        $view="show_customer";

        if ($customer) {  
            $customer->fill(['email_confirm' => $customer->email ]);
            $customer->fill(['password_confirm' => $customer->password ]);
    
            $msgstatus = "Confira os dados abaixo";
        } else {
            $msgstatus = "Cliente não localizado";
            $customer = new Customer;
        }

        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('customer',$customer)
        ;
    }

    public function edit($id) {
        // 
        $customer = Customer::find($id);
        //$customer->fill(['email_confirm' => $customer->email ]);
        //$customer->fill(['password_confirm' => $customer->password ]);
        $customer->email_confirm = $customer->email;
        $customer->password_confirm = $customer->password;

        $metodo = "PATCH";
        $msgtitulo = "4. Edite dados do Cliente";
        $msgstatus = "Edite os dados abaixo";
        $msgbotao = "Atualizar ->";
        $action=url('/')."/customer/update/$customer->id";
        $sucesso = null;
        $view="form_customer";
        return view( $view )
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('customer',$customer)
        ;
    }

    public function update(Request $request, $id) {
        //

        $customer = Customer::find($id);
        // os campos ['email_confirm'] ['password_confirm'] não existem na tabela users, portanto precisam ser criados no objeto

        $this->validate($request,[
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:6|max:255',
            'email_confirm' => 'required_with:email|same:email|min:6',
            'password' => 'required|min:6|max:64',
            'password_confirm' => 'required_with:password|same:password|min:6',
            'remember_token' => 'required|min:6|max:64',
        ]);

        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->password = $request->input('password');
        $customer->remember_token = $request->input('remember_token');
        // save() faz Update dos dados no banco de dados   
        $result = $customer->save();         
        $msgtitulo = "5. Atualizar dados do Cliente";
        
        if ($result) {
            $metodo = "GET";
            $msgstatus = "Cliente atualizado com sucesso!";
            $msgbotao = "Retornar ->";
            $action=url('/')."/customers";  
            $sucesso=true;
            $view='show_customer';
        } else {
            $metodo = "PATCH";
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar o Cliente, tente novamente!";
            $action=url('/')."/customer/update/$customer->id";
            $sucesso=false;
            $msgbotao = "Atualizar ->";
            $view="form_customer";
        }     
        return view($view)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('customer',$customer)
        ;
    }

    public function preDelete(Request $request, $id) {
        //Check role
        $role = $request->user()->authorizeRoles('admin');
        //Check role
        $customer = Customer::find($id);
        $metodo = "DELETE";
        $msgtitulo = "6. Confirmar Deleção do Cliente";
        $msgstatus = "Confirma deleção do Cliente abaixo ?";     
        $msgbotao = "Deletar ->";
        $sucesso=null;
        $action=url('/')."/customer/delete/$customer->id";
        $view="show_customer";
        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('customer',$customer)
        ;
    }

    public function delete ($id) {
        $customer = Customer::find($id);
        $msgtitulo = "7. Deletar Cliente";
        $msgstatus = "Cliente $customer->name excluído com sucesso!";  
        $customerid = $customer->id;
        $result = $customer->delete();
        //$result = Customer::destroy($id);
        if ( $result) {
            $metodo = "GET";
            $msgbotao = "Retornar ->";
            $action=url('/')."/customers/";
            $sucesso=true;
            $customer = new Customer;
        } else {
            $metodo = "GET";
            $msgstatus = "Ops, ocorreu um erro ao tentar excluir o Cliente, tente novamente!";
            $action=url('/')."/customer/preDelete/$customerid";
            $msgbotao = "Deletar ->";
            $sucesso=false;
        }     
        $view="show_customer";
        
        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('customer',$customer)
        ;
    }

}
