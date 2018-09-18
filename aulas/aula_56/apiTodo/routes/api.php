<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/listTasks', array('middleware' => 'cors', 'uses' => 'Api\TasksController@show'));
Route::post('/addTask', array('middleware' => 'cors', 'uses' => 'Api\TasksController@add'));
Route::get('/deleteTask/{id}', array('middleware' => 'cors', 'uses' => 'Api\TasksController@delete'));
Route::get('/updateTask/{id}', array('middleware' => 'cors', 'uses' => 'Api\TasksController@update'));
