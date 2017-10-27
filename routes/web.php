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

Route::get('/home', 'PedidoController@veiculosParaPedidos')->name('home');
Route::get('/veiculosParaPedidos','HomeController@');

Route::group(['middleware' => 'auth'], function() {

    Route::group(['prefix' => 'veiculos', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['as' => 'veiculos', 'uses' => 'VeiculoController@index']);
        Route::get('create', ['as' => 'veiculos.create', 'uses' => 'VeiculoController@novo']);
        Route::get('{id}/delete', ['as' => 'veiculos.destroy', 'uses' => 'VeiculoController@deletar']);
        Route::get('{id}/edit', ['as' => 'veiculos.edit', 'uses' => 'VeiculoController@editar']);
        Route::put('{id}/update', ['as' => 'veiculos.update', 'uses' => 'VeiculoController@atualizar']);
        Route::post('store', ['as' => 'veiculos.store', 'uses' => 'VeiculoController@salvar']);
    });

    Route::group(['prefix' => 'marcas', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['as' => 'marcas', 'uses' => 'MarcaController@index']);
        Route::get('create', ['as' => 'marcas.create', 'uses' => 'MarcaController@create']);
        Route::get('{id}/destroy', ['as' => 'marcas.destroy', 'uses' => 'MarcaController@destroy']);
        Route::get('{id}/edit', ['as' => 'marcas.edit', 'uses' => 'MarcaController@edit']);
        Route::put('{id}/update', ['as' => 'marcas.update', 'uses' => 'MarcaController@update']);
        Route::post('store', ['as' => 'marcas.store', 'uses' => 'MarcaController@store']);
    });

    Route::group(['prefix' => 'fornecedors', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['as' => 'fornecedors', 'uses' => 'FornecedorController@index']);
        Route::get('create', ['as' => 'fornecedors.create', 'uses' => 'FornecedorController@create']);
        Route::get('{id}/destroy', ['as' => 'fornecedors.destroy', 'uses' => 'FornecedorController@destroy']);
        Route::get('{id}/edit', ['as' => 'fornecedors.edit', 'uses' => 'FornecedorController@edit']);
        Route::put('{id}/update', ['as' => 'fornecedors.update', 'uses' => 'FornecedorController@update']);
        Route::post('store', ['as' => 'fornecedors.store', 'uses' => 'FornecedorController@store']);
        Route::get('relatorio', ['as' => 'fornecedors.relatorio', 'uses' => 'FornecedorController@relatorio']);
    });

    Route::group(['prefix' => 'clientes', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['as' => 'clientes', 'uses' => 'ClienteController@index']);
        Route::get('create', ['as' => 'clientes.create', 'uses' => 'ClienteController@create']);
        Route::get('{id}/destroy', ['as' => 'clientes.destroy', 'uses' => 'ClienteController@destroy']);
        Route::get('{id}/edit', ['as' => 'clientes.edit', 'uses' => 'ClienteController@edit']);
        Route::put('{id}/update', ['as' => 'clientes.update', 'uses' => 'ClienteController@update']);
        Route::post('store', ['as' => 'clientes.store', 'uses' => 'ClienteController@store']);
    });

    Route::group(['prefix' => 'atendentes', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['as' => 'atendentes', 'uses' => 'AtendenteController@index']);
        Route::get('create', ['as' => 'atendentes.create', 'uses' => 'AtendenteController@create']);
        Route::get('{id}/destroy', ['as' => 'atendentes.destroy', 'uses' => 'AtendenteController@destroy']);
        Route::get('{id}/edit', ['as' => 'atendentes.edit', 'uses' => 'AtendenteController@edit']);
        Route::put('{id}/update', ['as' => 'atendentes.update', 'uses' => 'AtendenteController@update']);
        Route::post('store', ['as' => 'atendentes.store', 'uses' => 'AtendenteController@store']);
    });




    Route::group(['prefix' => 'vendas', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['as' => 'vendas', 'uses' => 'VendaController@index']);
        Route::get('create', ['as' => 'vendas.create', 'uses' => 'VendaController@create']);
        Route::get('{id}/destroy', ['as' => 'vendas.destroy', 'uses' => 'VendaController@destroy']);
        Route::get('{id}/edit', ['as' => 'vendas.edit', 'uses' => 'VendaController@edit']);
        Route::put('{id}/update', ['as' => 'vendas.update', 'uses' => 'VendaController@update']);
        Route::post('store', ['as' => 'vendas.store', 'uses' => 'VendaController@store']);
        Route::get('relatorio', ['as' => 'vendas.relatorio', 'uses' => 'VendaController@relatorio']);
    });

    Route::group(['prefix' => 'compras', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['as' => 'compras', 'uses' => 'CompraController@index']);
        Route::get('create', ['as' => 'compras.create', 'uses' => 'CompraController@create']);
        Route::get('{id}/destroy', ['as' => 'compras.destroy', 'uses' => 'CompraController@destroy']);
        Route::get('{id}/edit', ['as' => 'compras.edit', 'uses' => 'CompraController@edit']);
        Route::put('{id}/update', ['as' => 'compras.update', 'uses' => 'CompraController@update']);
        Route::post('store', ['as' => 'compras.store', 'uses' => 'CompraController@store']);
    });

    Route::group(['prefix' => 'modelos', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['as' => 'modelos', 'uses' => 'ModeloController@index']);
        Route::get('create', ['as' => 'modelos.create', 'uses' => 'ModeloController@create']);
        Route::get('{id}/destroy', ['as' => 'modelos.destroy', 'uses' => 'ModeloController@destroy']);
        Route::get('{id}/edit', ['as' => 'modelos.edit', 'uses' => 'ModeloController@edit']);
        Route::put('{id}/update', ['as' => 'modelos.update', 'uses' => 'ModeloController@update']);
        Route::post('store', ['as' => 'modelos.store', 'uses' => 'ModeloController@store']);
    });
    Route::group(['prefix' => 'pedidos', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['as' => 'pedidos', 'uses' => 'PedidoController@index']);
        Route::get('create', ['as' => 'pedidos.create', 'uses' => 'PedidoController@create']);
        Route::get('{id}/destroy', ['as' => 'pedidos.destroy', 'uses' => 'PedidoController@destroy']);
        Route::get('{id}/edit', ['as' => 'pedidos.edit', 'uses' => 'PedidoController@edit']);
        Route::put('{id}/update', ['as' => 'pedidos.update', 'uses' => 'PedidoController@update']);
        Route::post('store', ['as' => 'pedidos.store', 'uses' => 'PedidoController@store']);
    });

});