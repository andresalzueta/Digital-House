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

Route::get('/home', function () {
    return view('home');
});

Route::middleware(['auth'])->group (Function() {
    // Precisa estar autenticado para conseguir acessar 
    Route::get('/users_pages','UserController@index');
    Route::get('/users/{id?}','UserController@directory');
    Route::get('/user/new','UserController@new');
    Route::put('/user/create','UserController@create');
    Route::get('/user/read/{id?}','UserController@read');
    Route::get('/user/edit/{id?}','UserController@edit');
    Route::patch('/user/update/{id?}','UserController@update');
    Route::get('/user/predelete/{id?}','UserController@preDelete');
    Route::delete('/user/delete/{id?}','UserController@delete');

    Route::get('/roles_pages','RoleController@index');
    Route::get('/roles/{id?}','RoleController@directory');
    Route::get('/role/new','RoleController@new');
    Route::put('/role/create','RoleController@create');
    Route::get('/role/read/{id?}','RoleController@read');
    Route::get('/role/edit/{id?}','RoleController@edit');
    Route::patch('/role/update/{id?}','RoleController@update');
    Route::get('/role/predelete/{id?}','RoleController@preDelete');
    Route::delete('/role/delete/{id?}','RoleController@delete');

    Route::get('/customers_pages','CustomerController@index');
    Route::get('/customers/{id?}','CustomerController@directory');
    Route::get('/customer/new','CustomerController@new');
    Route::put('/customer/create','CustomerController@create');
    Route::get('/customer/read/{id?}','CustomerController@read');
    Route::get('/customer/edit/{id?}','CustomerController@edit');
    Route::patch('/customer/update/{id?}','CustomerController@update');
    Route::get('/customer/predelete/{id?}','CustomerController@preDelete');
    Route::delete('/customer/delete/{id?}','CustomerController@delete');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//para requerer autenticação
Route::get('/middleware','HomeController@index')->middleware('auth');


