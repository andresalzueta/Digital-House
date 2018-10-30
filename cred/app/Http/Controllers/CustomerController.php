<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Customer;
use App\User;


class CustomerController extends Controller
{
    //
    // digitalhouse_db.customers[id, created_at, updated_at, user_id, cpf_cnpj, first_name, last_name, gender,
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
        // captura usuário logado
        $user = $user = auth()->user();
             
        $customer->user_id = $user->id;
        $customer->cpf_cnpj = old('cpf_cnpj');
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
        // $fillable = [user_id, cpf_cnpj, first_name, last_name, gender,birthday, phone, email, address, address_number, adress_complement, city, state, zipcode]
        
        $this->validate($request,[
            'user_id' => 'numeric|required|min:0|unique:customers',
            'cpf_cnpj' => 'required|cpf_cnpj|unique:customers',
            'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'gender' => 'required|in:F,M',
            'birthday' => 'date|date_format:Y-m-d|required|after:1900-01-01|before:today',
            'phone' => 'required|min:6|max:32',
            'email' => 'required|email|min:6|max:60|unique:customers',
            'address' => 'required|min:6|max:50',
            'address_number' => 'required|min:1|max:10',
            'address_complement' => 'required|min:1|max:50',
            'city' => 'required|min:3|max:50',
            'state' => 'required|min:2|max:2',
            'zipcode' => 'required|min:5|max:8',
        ]);

        
        $customer = Customer::create([
            'user_id' => $request->input('user_id'),
            'cpf_cnpj' => $request->input('cpf_cnpj'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'birthday' => $request->input('birthday'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'address_number' => $request->input('address_number'),
            'address_complement' => $request->input('address_complement'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zipcode' => $request->input('zipcode'),
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
            'user_id' => Rule::unique('customers')->ignore($customer->id, 'user_id'),
            'cpf_cnpj' => Rule::unique('customers')->ignore($customer->cpf_cnpj, 'cpf_cnpj'),
            'email' => Rule::unique('customers')->ignore($customer->email, 'email'),
            'user_id' => 'required',
            'cpf_cnpj' => 'required|cpf_cnpj',
            'email' => 'required|email',
            'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'gender' => 'required|in:F,M',
            'birthday' => 'date|date_format:Y-m-d|required|after:1900-01-01|before:today',
            'phone' => 'required|min:6|max:32',            
            'address' => 'required|min:6|max:50',
            'address_number' => 'required|min:1|max:10',
            'address_complement' => 'required|min:1|max:50',
            'city' => 'required|min:3|max:50',
            'state' => 'required|min:2|max:2',
            'zipcode' => 'required|min:5|max:8',
        ]);

                   
        $customer->user_id = $request->input('user_id');
        $customer->cpf_cnpj = $request->input('cpf_cnpj');
        $customer->first_name = $request->input('first_name');
        $customer->last_name = $request->input('last_name');
        $customer->gender = $request->input('gender');
        $customer->birthday = $request->input('birthday');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->address_number = $request->input('address_number');
        $customer->address_complement = $request->input('address_complement');
        $customer->city = $request->input('city');
        $customer->state = $request->input('state');
        $customer->zipcode = $request->input('zipcode');

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
