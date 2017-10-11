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
    Route::get('',               ['as'=>'veiculos',           'uses'=>'VeiculoController@index']);
    Route::get('create',         ['as'=>'veiculos.create',    'uses'=>'VeiculoController@novo']);
    Route::get('{id}/delete',    ['as'=>'veiculos.destroy',   'uses'=>'VeiculoController@deletar']);
    Route::get('{id}/edit',      ['as'=>'veiculos.edit',      'uses'=>'VeiculoController@editar']);
    Route::put('{id}/update',    ['as'=>'veiculos.update',    'uses'=>'VeiculoController@atualizar']);
    Route::post('store',         ['as'=>'veiculos.store',     'uses'=>'VeiculoController@salvar']);
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
    Route::get('',              ['as'=>'fornecedores',           'uses'=>'FornecedoresController@index']);
    Route::get('create',        ['as'=>'fornecedores.create',    'uses'=>'FornecedoresController@create']);
    Route::get('{id}/destroy',  ['as'=>'fornecedores.destroy',   'uses'=>'FornecedoresController@destroy']);
    Route::get('{id}/edit',     ['as'=>'fornecedores.edit',      'uses'=>'FornecedoresController@edit']);
    Route::put('{id}/update',   ['as'=>'fornecedores.update',    'uses'=>'FornecedoresController@update']);
    Route::post('store',        ['as'=>'fornecedores.store',     'uses'=>'FornecedoresController@store']);
});

Route::group(['prefix'=>'clientes','where'=>['id'=>'[0-9]+']],function(){
    Route::get('',              ['as'=>'clientes',           'uses'=>'ClienteController@index']);
    Route::get('create',        ['as'=>'clientes.create',    'uses'=>'ClienteController@create']);
    Route::get('{id}/destroy',  ['as'=>'clientes.destroy',   'uses'=>'ClienteController@destroy']);
    Route::get('{id}/edit',     ['as'=>'clientes.edit',      'uses'=>'ClienteController@edit']);
    Route::put('{id}/update',   ['as'=>'clientes.update',    'uses'=>'ClienteController@update']);
    Route::post('store',        ['as'=>'clientes.store',     'uses'=>'ClienteController@store']);
});

Route::group(['prefix'=>'atendentes','where'=>['id'=>'[0-9]+']],function(){
    Route::get('',              ['as'=>'atendentes',           'uses'=>'AtendenteController@index']);
    Route::get('create',        ['as'=>'atendentes.create',    'uses'=>'AtendenteController@create']);
    Route::get('{id}/destroy',  ['as'=>'atendentes.destroy',   'uses'=>'AtendenteController@destroy']);
    Route::get('{id}/edit',     ['as'=>'atendentes.edit',      'uses'=>'AtendenteController@edit']);
    Route::put('{id}/update',   ['as'=>'atendentes.update',    'uses'=>'AtendenteController@update']);
    Route::post('store',        ['as'=>'atendentes.store',     'uses'=>'AtendenteController@store']);
});

Route::group(['prefix'=>'vendas','where'=>['id'=>'[0-9]+']],function(){
    Route::get('',              ['as'=>'vendas',           'uses'=>'VendaController@index']);
    Route::get('create',        ['as'=>'vendas.create',    'uses'=>'VendaController@create']);
    Route::get('{id}/destroy',  ['as'=>'vendas.destroy',   'uses'=>'VendaController@destroy']);
    Route::get('{id}/edit',     ['as'=>'vendas.edit',      'uses'=>'VendaController@edit']);
    Route::put('{id}/update',   ['as'=>'vendas.update',    'uses'=>'VendaController@update']);
    Route::post('store',        ['as'=>'vendas.store',     'uses'=>'VendaController@store']);
});

Route::group(['prefix'=>'compras','where'=>['id'=>'[0-9]+']],function(){
    Route::get('',              ['as'=>'compras',           'uses'=>'CompraController@index']);
    Route::get('create',        ['as'=>'compras.create',    'uses'=>'CompraController@create']);
    Route::get('{id}/destroy',  ['as'=>'compras.destroy',   'uses'=>'CompraController@destroy']);
    Route::get('{id}/edit',     ['as'=>'compras.edit',      'uses'=>'CompraController@edit']);
    Route::put('{id}/update',   ['as'=>'compras.update',    'uses'=>'CompraController@update']);
    Route::post('store',        ['as'=>'compras.store',     'uses'=>'CompraController@store']);
});
