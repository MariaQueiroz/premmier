<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{

    public function index(){
        $pedidos = Pedido::get();
        return view('pedidos.index', ['pedidos' => $pedidos]);
    }
    public function novo(){
        return view('pedidos.create');
    }
    // request para trabalhar com dados enviados via Post
    public function salvar(Request $request){
        // var_dump($request); // mostra os dados do request

        $pedido = new Pedido();
        $pedido = $pedido->create($request->all());

        \Session::flash('mensagem_sucesso','Pedido cadastrado com sucesso!');

        // retorna o array do objeto pedido
        // return $pedido;
        return Redirect::to('pedidos/novo');

    }
    public function editar($id){
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.create', ['pedido' => $pedido]);
    }
    public function atualizar($id, Request $request){
        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());

        \Session::flash('mensagem_sucesso','Pedido atualizado com sucesso!');

        return Redirect::to('pedidos/'.$pedido->id.'/editar');

    }
    public function deletar($id){
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        \Session::flash('mensagem_sucesso','Pedido deletado com sucesso!');

        return Redirect::to('pedidos');

    }
}
