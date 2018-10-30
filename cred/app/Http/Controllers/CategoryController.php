<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Category;
use App\User;

class CategoryController extends Controller
{
    // digitalhouse_db.categories[id, created_at, updated_at, name, description, order, image, active]
    
    public function index() {
        // 
        //$categories = Category::paginate(5);
        $categories = Category::orderBy('name')->paginate(10);
        //$categories = Category::inRandomOrdery()->paginate(10);

        $metodo = "GET";
        $msgtitulo = "Produtos por Categorias";
        $msgstatus = "Escolha uma categoria e encontre os produtos que procura";
        
        return view('index_categories')
            ->with('categories', $categories)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function directory() {
        // Category é uma classe criada a partir de uma classe abstrata Model que manipula a tabela no banco 
        $categories = Category::orderBy('name')->get();
        // $categories = Category::all();     
        $metodo = "GET";
        $msgtitulo = "Lista das Marcas";
        $msgstatus = "Escolha Exibir, Editar ou Excluir";
        
        return view('filter_categories')
            ->with('categories',$categories)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function new() {
        // 
        $metodo = "PUT";
        $msgtitulo = "1. Inserir Nova Categoria";
        $msgstatus = "Preencha todos os dados";
        $msgbotao = "Inserir ->";
        $sucesso = null;
        $action=url('/')."/category/create";
        $category = new Category;

        // captura usuário logado
        $user = $user = auth()->user();

        $category->name = old('name');
        $category->description = old('description');
        $category->image = old('image');
        $category->order = old('order');
        $category->active = old('active');

        $view = "form_category";
        return view( $view )
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('category',$category)
        ;
    }

    public function create(Request $request) {
        // $fillable = [name, description, image, order, active]
        
        $this->validate($request,[
            'name' => 'required|min:3|max:50|unique:categories',
            'description' => 'min:3|max:255',
            'image' => 'min:0|max:255',
            'active' => 'boolean',
        ]);

        $category = Category::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'order' => $request->input('order'),
            'active' => $request->input('active'),
        ]);
        $result = $category->save();

        $msgtitulo = "2. Inserida Nova Categoria";
        
        if ($result) {
            $metodo = "GET";
            $msgstatus = "Categoria cadastrada com sucesso!";
            $msgbotao = "Retornar ->";
            $action=url('/')."/categories";  
            $sucesso=true;
            $view="show_category";
        } else {
            $metodo = "PUT";
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar a Categoria, tente novamente!";
            $action=url('/')."/category/create/";
            $sucesso=false;
            $msgbotao = "Inserir ->";
            $view="form_category";
        }     
        return view($view)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('category',$category)
        ;
    }

    public function read($id) {
        // 
        $category = Category::find($id);

        $metodo = "GET";
        $msgtitulo = "3. Leia dados da Categoria";
        $msgbotao = "Retornar ->";
        $sucesso = null;
        $action=url('/')."/categories";
        $view="show_category";

        if ($category) {  
            $msgstatus = "Confira os dados abaixo";
        } else {
            $msgstatus = "Categoria não localizada";
            $category = new Category;
        }

        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('category',$category)
        ;
    }

    public function edit($id) {
        // 
        $category = Category::find($id);
        
        $metodo = "PATCH";
        $msgtitulo = "4. Edite dados da Categoria";
        $msgstatus = "Edite os dados abaixo";
        $msgbotao = "Atualizar ->";
        $action=url('/')."/category/update/$category->id";
        $sucesso = null;
        $view="form_category";
        return view( $view )
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('category',$category)
        ;
    }

    public function update(Request $request, $id) {
        //
        $category = Category::find($id);

        $this->validate($request,[
            'name' => Rule::unique('name')->ignore($category->name, 'name'),
            'name' => 'required|min:3|max:50',
            'description' => 'min:3|max:255',
            'image' => 'min:0|max:255',
            'order' => 'min:0',
            'active' => 'boolean',
        ]);
                   
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->image = $request->input('image');
        $category->order = $request->input('order');
        $category->active = $request->input('active');
        
        // save() faz Update dos dados no banco de dados   
        $result = $category->save();         
        $msgtitulo = "5. Atualizar dados da Categoria";
        
        if ($result) {
            $metodo = "GET";
            $msgstatus = "Categoria atualizada com sucesso!";
            $msgbotao = "Retornar ->";
            $action=url('/')."/categories";  
            $sucesso=true;
            $view='show_category';
        } else {
            $metodo = "PATCH";
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar a Categoria, tente novamente!";
            $action=url('/')."/category/update/$category->id";
            $sucesso=false;
            $msgbotao = "Atualizar ->";
            $view="form_category";
        }     
        return view($view)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('category',$category)
        ;
    }

    public function preDelete(Request $request, $id) {
        //Check role
        $role = $request->user()->authorizeRoles('admin');
        //Check role
        $category = Category::find($id);
        $metodo = "DELETE";
        $msgtitulo = "6. Confirmar Deleção da Categoria";
        $msgstatus = "Confirma deleção da Categoria abaixo ?";     
        $msgbotao = "Deletar ->";
        $sucesso=null;
        $action=url('/')."/category/delete/$category->id";
        $view="show_category";
        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('category',$category)
        ;
    }

    public function delete ($id) {
        $category = Category::find($id);
        $msgtitulo = "7. Deletar Categoria";
        $msgstatus = "Categoria $category->name excluída com sucesso!";  
        $category_id = $category->id;
        $result = $category->delete();
        //$result = category::destroy($id);
        if ( $result) {
            $metodo = "GET";
            $msgbotao = "Retornar ->";
            $action=url('/')."/categories/";
            $sucesso=true;
            $category = new Category;
        } else {
            $metodo = "GET";
            $msgstatus = "Ops, ocorreu um erro ao tentar excluir a Categoria, tente novamente!";
            $action=url('/')."/category/preDelete/$category_id";
            $msgbotao = "Deletar ->";
            $sucesso=false;
        }     
        $view="show_category";
        
        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('category',$category)
        ;
    }
}
