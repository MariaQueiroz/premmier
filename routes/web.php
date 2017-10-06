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
Route::get('premmier','CarroControler@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'veiculos','where'=>['id'=>'[0-9]+']],function(){
    Route::get('',              ['as'=>'veiculo',           'uses'=>'VeiculoController@index']);
    Route::get('create',        ['as'=>'veiculo.create',    'uses'=>'VeiculoController@create']);
    Route::get('{id}/destroy',  ['as'=>'veiculo.destroy',   'uses'=>'VeiculoController@destroy']);
    Route::get('{id}/edit',     ['as'=>'veiculo.edit',      'uses'=>'VeiculoController@edit']);
    Route::put('{id}/update',   ['as'=>'veiculo.update',    'uses'=>'VeiculoController@update']);
    Route::post('store',        ['as'=>'veiculo.store',     'uses'=>'VeiculoController@store']);
});

Route::group(['prefix'=>'marcas','where'=>['id'=>'[0-9]+']],function(){
    Route::get('',              ['as'=>'marcas',           'uses'=>'MarcaController@index']);
    Route::get('create',        ['as'=>'marcas.create',    'uses'=>'MarcaController@create']);
    Route::get('{id}/destroy',  ['as'=>'marcas.destroy',   'uses'=>'MarcaController@destroy']);
    Route::get('{id}/edit',     ['as'=>'marcas.edit',      'uses'=>'MarcaController@edit']);
    Route::put('{id}/update',   ['as'=>'marcas.update',    'uses'=>'MarcaController@update']);
    Route::post('store',        ['as'=>'marcas.store',     'uses'=>'MarcaController@store']);
});


Route::group(['prefix'=>'novo','where'=>['id'=>'[0-9]+']],function(){
    Route::get('',              ['as'=>'novo',           'uses'=>'NovoController@index']);
    Route::get('create',        ['as'=>'novo.create',    'uses'=>'NovoController@create']);
    Route::get('{id}/destroy',  ['as'=>'novo.destroy',   'uses'=>'NovoController@destroy']);
    Route::get('{id}/edit',     ['as'=>'novo.edit',      'uses'=>'NovoController@edit']);
    Route::put('{id}/update',   ['as'=>'novo.update',    'uses'=>'NovoController@update']);
    Route::post('store',        ['as'=>'novo.store',     'uses'=>'NovoController@store']);
});