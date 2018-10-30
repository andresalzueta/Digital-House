<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Brand;
use App\User;


class BrandController extends Controller
{
    //
    // digitalhouse_db.brands[id, created_at, updated_at, name, description, image, active]
    

    public function index() {
        // 
        //$brands = Brand::paginate(5);
        $brands = Brand::orderBy('name')->paginate(10);
        //$brands = Brand::inRandomOrdery()->paginate(10);

        $metodo = "GET";
        $msgtitulo = "Nossas Marcas";
        $msgstatus = "Escolha uma marca de sua preferência";
        
        return view('index_brands')
            ->with('brands', $brands)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function directory() {
        // users é uma classe criada a partir de uma classe abstrata Model que manipula a tabela no banco 
        $brands = Brand::orderBy('name')->get();
        // $brands = Brand::all();     
        $metodo = "GET";
        $msgtitulo = "Lista das Marcas";
        $msgstatus = "Escolha Exibir, Editar ou Excluir";
        
        return view('filter_brands')
            ->with('brands',$brands)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function new() {
        // 
        $metodo = "PUT";
        $msgtitulo = "1. Inserir Nova Marca";
        $msgstatus = "Preencha todos os dados";
        $msgbotao = "Inserir ->";
        $sucesso = null;
        $action=url('/')."/brand/create";
        
        $brand = new Brand;
        // captura usuário logado
        $user = $user = auth()->user();
            
        $brand->name = old('name');
        $brand->description = old('description');
        $brand->image = old('image');
        $brand->active = old('active');

        $view="form_brand";
        return view( $view )
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('brand',$brand)
        ;
    }

    public function create(Request $request) {
        // $fillable = [name, description, image, active]

        $this->validate($request,[
            'name' => 'required|min:3|max:50',
            'description' => 'min:3|max:255',
            'image' => 'min:0|max:255',
            'active' => 'boolean',
        ]);

        $brand = Brand::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'active' => $request->input('active'),
        ]);
        $result = $brand->save();

        $msgtitulo = "2. Inserida Nova Marca";
        
        if ($result) {
            $metodo = "GET";
            $msgstatus = "Marca cadastrada com sucesso!";
            $msgbotao = "Retornar ->";
            $action=url('/')."/brands";  
            $sucesso=true;
            $view="show_brand";
        } else {
            $metodo = "PUT";
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar a Marca, tente novamente!";
            $action=url('/')."/brand/create/";
            $sucesso=false;
            $msgbotao = "Inserir ->";
            $view="form_brand";
        }     
        return view($view)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('brand',$brand)
        ;
    }

    public function read($id) {
        // 
        $brand = Brand::find($id);

        $metodo = "GET";
        $msgtitulo = "3. Leia dados da Marca";
        $msgbotao = "Retornar ->";
        $sucesso = null;
        $action=url('/')."/brands";
        $view="show_brand";

        if ($brand) {  
            $msgstatus = "Confira os dados abaixo";
        } else {
            $msgstatus = "Marca não localizada";
            $brand = new Brand;
        }

        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('brand',$brand)
        ;
    }

    public function edit($id) {
        // 
        $brand = Brand::find($id);
        //$brand->fill(['email_confirm' => $brand->email ]);
        //$brand->fill(['password_confirm' => $brand->password ]);
        
        $metodo = "PATCH";
        $msgtitulo = "4. Edite dados da Marca";
        $msgstatus = "Edite os dados abaixo";
        $msgbotao = "Atualizar ->";
        $action=url('/')."/brand/update/$brand->id";
        $sucesso = null;
        $view="form_brand";
        return view( $view )
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('brand',$brand)
        ;
    }

    public function update(Request $request, $id) {
        //

        $brand = Brand::find($id);
        // os campos ['email_confirm'] ['password_confirm'] não existem na tabela users, portanto precisam ser criados no objeto

        $this->validate($request,[
            'name' => Rule::unique('name')->ignore($brand->name, 'name'),
            'name' => 'required|min:3|max:50',
            'description' => 'min:3|max:255',
            'image' => 'min:0|max:255',
            'active' => 'boolean',
        ]);
                   
        $brand->name = $request->input('name');
        $brand->description = $request->input('description');
        $brand->image = $request->input('image');
        $brand->active = $request->input('active');
        
        // save() faz Update dos dados no banco de dados   
        $result = $brand->save();         
        $msgtitulo = "5. Atualizar dados da Marca";
        
        if ($result) {
            $metodo = "GET";
            $msgstatus = "Marca atualizada com sucesso!";
            $msgbotao = "Retornar ->";
            $action=url('/')."/brands";  
            $sucesso=true;
            $view='show_brand';
        } else {
            $metodo = "PATCH";
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar a Marca, tente novamente!";
            $action=url('/')."/brand/update/$brand->id";
            $sucesso=false;
            $msgbotao = "Atualizar ->";
            $view="form_brand";
        }     
        return view($view)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('brand',$brand)
        ;
    }

    public function preDelete(Request $request, $id) {
        //Check role
        $role = $request->user()->authorizeRoles('admin');
        //Check role
        $brand = Brand::find($id);
        $metodo = "DELETE";
        $msgtitulo = "6. Confirmar Deleção da Marca";
        $msgstatus = "Confirma deleção da Marca abaixo ?";     
        $msgbotao = "Deletar ->";
        $sucesso=null;
        $action=url('/')."/brand/delete/$brand->id";
        $view="show_brand";
        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('brand',$brand)
        ;
    }

    public function delete ($id) {
        $brand = Brand::find($id);
        $msgtitulo = "7. Deletar Marca";
        $msgstatus = "Marca $brand->name excluída com sucesso!";  
        $brandid = $brand->id;
        $result = $brand->delete();
        //$result = Brand::destroy($id);
        if ( $result) {
            $metodo = "GET";
            $msgbotao = "Retornar ->";
            $action=url('/')."/brands/";
            $sucesso=true;
            $brand = new Brand;
        } else {
            $metodo = "GET";
            $msgstatus = "Ops, ocorreu um erro ao tentar excluir a Marca, tente novamente!";
            $action=url('/')."/brand/preDelete/$brandid";
            $msgbotao = "Deletar ->";
            $sucesso=false;
        }     
        $view="show_brand";
        
        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('brand',$brand)
        ;
    }
}
