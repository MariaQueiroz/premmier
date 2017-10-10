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
    Route::get('',                  ['as'=>'veiculo',           'uses'=>'VeiculoController@index']);
    Route::get('novo',              ['as'=>'veiculo.create',    'uses'=>'VeiculoController@novo']);
    Route::get('{id}/deletar',      ['as'=>'veiculo.destroy',   'uses'=>'VeiculoController@deletar']);
    Route::get('{id}/editar',       ['as'=>'veiculo.edit',      'uses'=>'VeiculoController@editar']);
    Route::put('{id}/atualizar',    ['as'=>'veiculo.update',    'uses'=>'VeiculoController@atualizar']);
    Route::post('salvar',           ['as'=>'veiculo.store',     'uses'=>'VeiculoController@salvar']);
});

Route::group(['prefix'=>'marcas','where'=>['id'=>'[0-9]+']],function(){
    Route::get('',              ['as'=>'marcas',           'uses'=>'MarcaController@index']);
    Route::get('create',        ['as'=>'marcas.create',    'uses'=>'MarcaController@create']);
    Route::get('{id}/destroy',  ['as'=>'marcas.destroy',   'uses'=>'MarcaController@destroy']);
    Route::get('{id}/edit',     ['as'=>'marcas.edit',      'uses'=>'MarcaController@edit']);
    Route::put('{id}/update',   ['as'=>'marcas.update',    'uses'=>'MarcaController@update']);
    Route::post('store',        ['as'=>'marcas.store',     'uses'=>'MarcaController@store']);
});

Route::group(['prefix'=>'fornecedor','where'=>['id'=>'[0-9]+']],function(){
    Route::get('',              ['as'=>'fornecedor',           'uses'=>'FornecedorController@index']);
    Route::get('create',        ['as'=>'fornecedor.create',    'uses'=>'FornecedorController@create']);
    Route::get('{id}/destroy',  ['as'=>'fornecedor.destroy',   'uses'=>'FornecedorController@destroy']);
    Route::get('{id}/edit',     ['as'=>'fornecedor.edit',      'uses'=>'FornecedorController@edit']);
    Route::put('{id}/update',   ['as'=>'fornecedor.update',    'uses'=>'FornecedorController@update']);
    Route::post('store',        ['as'=>'fornecedor.store',     'uses'=>'FornecedorController@store']);
});

Route::group(['prefix'=>'cliente','where'=>['id'=>'[0-9]+']],function(){
    Route::get('',              ['as'=>'cliente',           'uses'=>'ClienteController@index']);
    Route::get('create',        ['as'=>'cliente.create',    'uses'=>'ClienteController@create']);
    Route::get('{id}/destroy',  ['as'=>'cliente.destroy',   'uses'=>'ClienteController@destroy']);
    Route::get('{id}/edit',     ['as'=>'cliente.edit',      'uses'=>'ClienteController@edit']);
    Route::put('{id}/update',   ['as'=>'cliente.update',    'uses'=>'ClienteController@update']);
    Route::post('store',        ['as'=>'cliente.store',     'uses'=>'ClienteController@store']);
});

Route::group(['prefix'=>'atendente','where'=>['id'=>'[0-9]+']],function(){
    Route::get('',              ['as'=>'atendente',           'uses'=>'AtendenteController@index']);
    Route::get('create',        ['as'=>'atendente.create',    'uses'=>'AtendenteController@create']);
    Route::get('{id}/destroy',  ['as'=>'atendente.destroy',   'uses'=>'AtendenteController@destroy']);
    Route::get('{id}/edit',     ['as'=>'atendente.edit',      'uses'=>'AtendenteController@edit']);
    Route::put('{id}/update',   ['as'=>'atendente.update',    'uses'=>'AtendenteController@update']);
    Route::post('store',        ['as'=>'atendente.store',     'uses'=>'AtendenteController@store']);
});

Route::group(['prefix'=>'venda','where'=>['id'=>'[0-9]+']],function(){
    Route::get('',              ['as'=>'venda',           'uses'=>'VendaController@index']);
    Route::get('create',        ['as'=>'venda.create',    'uses'=>'VendaController@create']);
    Route::get('{id}/destroy',  ['as'=>'venda.destroy',   'uses'=>'VendaController@destroy']);
    Route::get('{id}/edit',     ['as'=>'venda.edit',      'uses'=>'VendaController@edit']);
    Route::put('{id}/update',   ['as'=>'venda.update',    'uses'=>'VendaController@update']);
    Route::post('store',        ['as'=>'venda.store',     'uses'=>'VendaController@store']);
});
