<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Product;
use App\Brand;
use App\Category;
use App\User;

class ProductController extends Controller
{
    //
    // digitalhouse_db.products[id, created_at, updated_at, name, description, order, image, active]
    
    public function index() {
        //$products = Product::paginate(5);
        $products = Product::orderBy('name')->paginate(8);
        //$products = Product::inRandomOrdery()->paginate(10);
        $metodo = "GET";
        $msgtitulo = "Nossos Produtos";
        $msgstatus = "Escolha um produto de sua preferência";
        
        return view('index_products')
            ->with('products', $products)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function indexBrand($brand_id) {
        // 
        $products = Product::where('brand_id', '=', $brand_id)->orderBy('name')->paginate(8);

        $metodo = "GET";
        $msgtitulo = "Index dos Produtos";
        $msgstatus = "Escolha um produto de sua preferência";
        
        return view('index_products')
            ->with('products', $products)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function indexCategory($category_id) {
        // 
        $products = Product::where('category_id', '=', $category_id)->orderBy('name')->paginate(8);

        $metodo = "GET";
        $msgtitulo = "Index dos Produtos da Categoria ";
        $msgstatus = "Escolha um produto de sua preferência";
        
        return view('index_products')
            ->with('products', $products)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function directory() {
        // Product é uma classe criada a partir de uma classe abstrata Model que manipula a tabela no banco 
        $products = Product::orderBy('name')->get();
        // $products = Product::all();     
        $metodo = "GET";
        $msgtitulo = "Lista dos Produtos";
        $msgstatus = "Escolha Exibir, Editar ou Excluir";
        
        return view('filter_products')
            ->with('products',$products)
            ->with('metodo',$metodo)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
        ;
    }

    public function new() {
        // 
        $metodo = "PUT";
        $msgtitulo = "1. Inserir Novo Produto";
        $msgstatus = "Preencha todos os dados";
        $msgbotao = "Inserir ->";
        $sucesso = null;
        $action=url('/')."/product/create";
        $product = new Product;

        // captura usuário logado
        $user = $user = auth()->user();

        $product->product_id    = old('product_id');
        $product->name          = old('name');
        $product->description   = old('description');
        $product->image         = old('image');
        $product->price         = old('price');
        $product->active        = old('active');
        $product->category_id   = old('category_id');
        $product->brand_id      = old('brand_id');

        $view = "form_product";
        return view( $view )
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('product',$product)
        ;
    }

    public function create(Request $request) {
        // $fillable = [name, description, image, order, active]
        
        $this->validate($request,[
            'product_id' => 'required|min:3|max:20|unique:products',
            'name' => 'required|min:3|max:50|unique:products',
            'description' => 'min:3|max:255',
            'price' => 'min:0',
            'image' => 'min:0|max:255',
            'active' => 'boolean',
        ]);

        $product = Product::create([
            'product_id' => $request->input('product_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'price' => $request->input('price'),
            'active' => $request->input('active'),
            'category_id' => $request->input('category_id'),
            'brand_id' => $request->input('brand_id'),  
        ]);
        $result = $product->save();

        $msgtitulo = "2. Inserida Novo Produto";
        
        if ($result) {
            $metodo = "GET";
            $msgstatus = "Produto cadastrada com sucesso!";
            $msgbotao = "Retornar ->";
            $action=url('/')."/products";  
            $sucesso=true;
            $view="show_product";
        } else {
            $metodo = "PUT";
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar o Produto, tente novamente!";
            $action=url('/')."/product/create/";
            $sucesso=false;
            $msgbotao = "Inserir ->";
            $view="form_product";
        }     
        return view($view)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('product',$product)
        ;
    }

    public function read($id) {
        // 
        $product = Product::find($id);

        $metodo = "GET";
        $msgtitulo = "3. Leia dados do Produto";
        $msgbotao = "Retornar ->";
        $sucesso = null;
        $action=url('/')."/products";
        $view="show_product";

        if ($product) {  
            $msgstatus = "Confira os dados abaixo";
        } else {
            $msgstatus = "Produto não localizada";
            $product = new Product;
        }

        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('product',$product)
        ;
    }

    public function show($id) {
        // 
        $product = Product::find($id);

        $metodo = "GET";
        $msgtitulo = "Produto disponível, para inserí-lo no carrinho clique no botão comprar";
        $msgbotao = "Comprar ->";
        $sucesso = null;
        $action=url('/')."/register";
        //$action=url('/')."/product/select/$product->id";
        $view="show_product";

        if ($product) {  
            $msgstatus = "Confira os dados abaixo";
        } else {
            $msgstatus = "Produto não localizada";
            $product = new Product;
        }

        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('product',$product)
        ;
    }


    public function edit($id) {
        // 
        $product = Product::find($id);
        
        $metodo = "PATCH";
        $msgtitulo = "4. Edite dados do Produto";
        $msgstatus = "Edite os dados abaixo";
        $msgbotao = "Atualizar ->";
        $action=url('/')."/product/update/$product->id";
        $sucesso = null;
        $view="form_product";
        return view( $view )
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('product',$product)
        ;
    }

    public function update(Request $request, $id) {
        //
        $product = Product::find($id);

        $this->validate($request,[
            'product_id' => Rule::unique('name')->ignore($product->product_id, 'product_id'),
            'product_id' => 'required|min:3|max:20',
            'name' => Rule::unique('name')->ignore($product->name, 'name'),
            'name' => 'required|min:3|max:50',
            'description' => 'min:3|max:255',
            'image' => 'min:0|max:255',
            'price' => 'min:0',
            'active' => 'boolean',
            ]);

        $product->product_id    = $request->input('product_id');
        $product->name          = $request->input('name');
        $product->description   = $request->input('description');
        $product->image         = $request->input('image');
        $product->price         = $request->input('price');
        $product->active        = $request->input('active');
        $product->category_id   = $request->input('category_id');
        $product->brand_id      = $request->input('brand_id');

        // save() faz Update dos dados no banco de dados   
        $result = $product->save();         
        $msgtitulo = "5. Atualizar dados do Produto";
        
        if ($result) {
            $metodo = "GET";
            $msgstatus = "Produto atualizada com sucesso!";
            $msgbotao = "Retornar ->";
            $action=url('/')."/products";  
            $sucesso=true;
            $view='show_product';
        } else {
            $metodo = "PATCH";
            $msgstatus = "Ops, ocorreu um erro ao tentar salvar o Produto, tente novamente!";
            $action=url('/')."/product/update/$product->id";
            $sucesso=false;
            $msgbotao = "Atualizar ->";
            $view="form_product";
        }     
        return view($view)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('sucesso',$sucesso)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('product',$product)
        ;
    }

    public function preDelete(Request $request, $id) {
        //Check role
        $role = $request->user()->authorizeRoles('admin');
        //Check role
        $product = Product::find($id);
        $metodo = "DELETE";
        $msgtitulo = "6. Confirmar Deleção do Produto";
        $msgstatus = "Confirma deleção do Produto abaixo ?";     
        $msgbotao = "Deletar ->";
        $sucesso=null;
        $action=url('/')."/product/delete/$product->id";
        $view="show_product";
        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('product',$product)
        ;
    }

    public function delete ($id) {
        $product = Product::find($id);
        $msgtitulo = "7. Deletar Produto";
        $msgstatus = "Produto $product->name excluído com sucesso!";  
        $deleted_id = $product->id;
        $result = $product->delete();
        //$result = Product::destroy($id);
        if ( $result) {
            $metodo = "GET";
            $msgbotao = "Retornar ->";
            $action=url('/')."/products/";
            $sucesso=true;
            $product = new Product;
        } else {
            $metodo = "GET";
            $msgstatus = "Ops, ocorreu um erro ao tentar excluir o Produto, tente novamente!";
            $action=url('/')."/product/preDelete/$deleted_id";
            $msgbotao = "Deletar ->";
            $sucesso=false;
        }     
        $view="show_product";
        
        return view( $view )
            ->with('sucesso',$sucesso)
            ->with('metodo',$metodo)
            ->with('action',$action)
            ->with('msgtitulo',$msgtitulo)   
            ->with('msgstatus',$msgstatus)
            ->with('msgbotao',$msgbotao)
            ->with('product',$product)
        ;
    }    
}
