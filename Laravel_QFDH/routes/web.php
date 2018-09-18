 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
});

Route::get('/home2', function () {
    return view('home');
});

Route::middleware(['auth'])->group (Function() {
    // Precisa estar autenticado para conseguir acessar algumas rotas
    Route::group(['role' => 'admin'], function() {
        // Precisa ser administrador para conseguir acessar o CRUD de administração da loja
        // Rotas do CRUD de Usuários
        Route::get('/users_pages','UserController@index');
        Route::get('/users/{id?}','UserController@directory');
        Route::get('/user/new','UserController@new');
        Route::put('/user/create','UserController@create');
        Route::get('/user/read/{id?}','UserController@read');
        Route::get('/user/edit/{id?}','UserController@edit');
        Route::patch('/user/update/{id?}','UserController@update');
        Route::get('/user/predelete/{id?}','UserController@preDelete');
        Route::delete('/user/delete/{id?}','UserController@delete');
        // Rotas do CRUD de Funções dos Usuários
        Route::get('/roles_pages','RoleController@index');
        Route::get('/roles/{id?}','RoleController@directory');
        Route::get('/role/new','RoleController@new');
        Route::put('/role/create','RoleController@create');
        Route::get('/role/read/{id?}','RoleController@read');
        Route::get('/role/edit/{id?}','RoleController@edit');
        Route::patch('/role/update/{id?}','RoleController@update');
        Route::get('/role/predelete/{id?}','RoleController@preDelete');
        Route::delete('/role/delete/{id?}','RoleController@delete');
        // Rotas do CRUD de Clientes
        Route::get('/customers_pages','CustomerController@index');
        Route::get('/customers/{id?}','CustomerController@directory');
        Route::get('/customer/new','CustomerController@new');
        Route::put('/customer/create','CustomerController@create');
        Route::get('/customer/read/{id?}','CustomerController@read');
        Route::get('/customer/edit/{id?}','CustomerController@edit');
        Route::patch('/customer/update/{id?}','CustomerController@update');
        Route::get('/customer/predelete/{id?}','CustomerController@preDelete');
        Route::delete('/customer/delete/{id?}','CustomerController@delete');
        // Rotas do CRUD de Categorias de Produtos
        
        Route::get('/categories/{id?}','CategoryController@directory');
        Route::get('/category/new','CategoryController@new');
        Route::put('/category/create','CategoryController@create');
        Route::get('/category/read/{id?}','CategoryController@read');
        Route::get('/category/edit/{id?}','CategoryController@edit');
        Route::patch('/category/update/{id?}','CategoryController@update');
        Route::get('/category/predelete/{id?}','CategoryController@preDelete');
        Route::delete('/category/delete/{id?}','CategoryController@delete');
        // Rotas do CRUD de Marcas de Produtos
        
        Route::get('/brands/{id?}','BrandController@directory');
        Route::get('/brand/new','BrandController@new');
        Route::put('/brand/create','BrandController@create');
        Route::get('/brand/read/{id?}','BrandController@read');
        Route::get('/brand/edit/{id?}','BrandController@edit');
        Route::patch('/brand/update/{id?}','BrandController@update');
        Route::get('/brand/predelete/{id?}','BrandController@preDelete');
        Route::delete('/brand/delete/{id?}','BrandController@delete');
        // Rotas do CRUD de Produtos
        Route::get('/products/{id?}','ProductController@directory');
        Route::get('/product/new','ProductController@new');
        Route::put('/product/create','ProductController@create');
        Route::get('/product/read/{id?}','ProductController@read');
        Route::get('/product/edit/{id?}','ProductController@edit');
        Route::patch('/product/update/{id?}','ProductController@update');
        Route::get('/product/predelete/{id?}','ProductController@preDelete');
        Route::delete('/product/delete/{id?}','ProductController@delete');
        // Rotas do CRUD de Pedidos
        Route::get('/orders_pages','OrderController@index');
        Route::get('/orders/{id?}','OrderController@directory');
        Route::get('/order/new','OrderController@new');
        Route::put('/order/create','OrderController@create');
        Route::get('/order/read/{id?}','OrderController@read');
        Route::get('/order/edit/{id?}','OrderController@edit');
        Route::patch('/order/update/{id?}','OrderController@update');
        Route::get('/order/predelete/{id?}','OrderController@preDelete');
        Route::delete('/order/delete/{id?}','OrderController@delete');
    });  

});

Auth::routes();


Route::get('/perguntas', 'rotasController@perguntas')->name('perguntas');
Route::get('/contato', 'rotasController@contato')->name('contato');
// Route::get('/login', 'rotasController@login')->name('login');

//para requerer autenticação
Route::get('/middleware','HomeController@index')->middleware('auth');

//não requer autenticação
Route::get('/home', 'rotasController@home')->name('home');
Route::get('/categories_pages','CategoryController@index');
Route::get('/products_pages','ProductController@index');
Route::get('/products_bybrand/{id?}','ProductController@indexBrand');
Route::get('/products_bycategory/{id?}','ProductController@indexCategory');
Route::get('/brands_pages','BrandController@index');
Route::get('/product/show/{id?}','ProductController@show');
Route::get('search','ProductsController@search');
