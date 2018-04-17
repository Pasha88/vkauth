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
    return view('welcome');
});


Route::get('/todo', [
    'as' => 'todo',
    'uses' => 'ToDoController@index'
]);

Route::get('/todo/login', [
    'as' => 'user-login',
    'uses' => 'AuthController@getLogin'
]);

Route::post('/todo/login', [
    'uses' => 'AuthController@postLogin'
]);