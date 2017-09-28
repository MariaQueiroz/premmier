<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeloController extends Controller
{

    public function index(){
        $pedidos = Modelo::get();
        return view('pedidos.index', ['pedidos' => $pedidos]);
    }
    public function novo(){
        return view('pedidos.create');
    }
    // request para trabalhar com dados enviados via Post
    public function salvar(Request $request){
        // var_dump($request); // mostra os dados do request

        $pedido = new Modelo();
        $pedido = $pedido->create($request->all());

        \Session::flash('mensagem_sucesso','Modelo cadastrado com sucesso!');

        // retorna o array do objeto pedido
        // return $pedido;
        return Redirect::to('pedidos/novo');

    }
    public function editar($id){
        $pedido = Modelo::findOrFail($id);
        return view('pedidos.create', ['pedido' => $pedido]);
    }
    public function atualizar($id, Request $request){
        $pedido = Modelo::findOrFail($id);
        $pedido->update($request->all());

        \Session::flash('mensagem_sucesso','Modelo atualizado com sucesso!');

        return Redirect::to('pedidos/'.$pedido->id.'/editar');

    }
    public function deletar($id){
        $pedido = Modelo::findOrFail($id);
        $pedido->delete();

        \Session::flash('mensagem_sucesso','Modelo deletado com sucesso!');

        return Redirect::to('pedidos');

    }
}
