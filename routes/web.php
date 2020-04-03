<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TodoListController@index');
Route::get('/destroy/{id}', 'TodoListController@destroy');
Route::get('/edit/{id}', 'TodoListController@edit');
Route::post('/update', 'TodoListController@update');
Route::get('/create', 'TodoListController@show_create');
Route::post('/create', 'TodoListController@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
