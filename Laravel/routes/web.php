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
    Route::get('/teste/{argumento?}','DigitalHouseController@metodoTeste');

    Route::get('/movies_pages','MovieController@index');
    Route::get('/movies','MovieController@directory');
    Route::get('/movie/new','MovieController@new');
    Route::put('/movie/create','MovieController@create');
    Route::get('/movie/read/{id?}','MovieController@read');
    Route::get('/movie/edit/{id?}','MovieController@edit');
    Route::patch('/movie/update/{id?}','MovieController@update');
    Route::get('/movie/preDelete/{id?}','MovieController@preDelete');
    Route::delete('/movie/delete/{id?}','MovieController@delete');
    
    
    Route::get('/filmes/{id?}','MovieController@procurarFilmeId');
    Route::get('/filmes/procurar/{nome?}','MovieController@procurarFilmeNome');
    
    Route::get('/genres','GenreController@directory');
    Route::get('/genre/new','GenreController@new');
    Route::put('/genre/create','GenreController@create');
    Route::get('/genre/read/{id?}','GenreController@read');
    Route::get('/genre/edit/{id?}','GenreController@edit');
    Route::patch('/genre/update/{id?}','GenreController@update');
    Route::get('/genre/predelete/{id?}','GenreController@preDelete');
    Route::delete('/genre/delete/{id?}','GenreController@delete');
    
    Route::get('/ator/{id?}','ActorController@showid');
    
    Route::get('/actors_pages','ActorController@index');
    Route::get('/actors/{id?}','ActorController@directory');
    Route::get('/actor/new','ActorController@new');
    Route::put('/actor/create','ActorController@create');
    Route::get('/actor/read/{id?}','ActorController@read');
    Route::get('/actor/edit/{id?}','ActorController@edit');
    Route::patch('/actor/update/{id?}','ActorController@update');
    Route::get('/actor/predelete/{id?}','ActorController@preDelete');
    Route::delete('/actor/delete/{id?}','ActorController@delete');
    
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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//para requerer autenticação
Route::get('/middleware','MovieController@index')->middleware('auth');


