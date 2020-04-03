<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/', 'TodoListController@index');
Route::get('/destroy/{id}', 'TodoListController@destroy');
Route::get('/edit/{id}', 'TodoListController@edit');
Route::post('/update', 'TodoListController@update');
Route::get('/create', 'TodoListController@show_create');
Route::post('/create', 'TodoListController@create');

