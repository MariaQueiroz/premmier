<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index(){
        $clientes = Cliente::get();
        return view('clientes.index', ['clientes' => $clientes]);
    }
    public function novo(){
        return view('clientes.create');
    }
    // request para trabalhar com dados enviados via Post
    public function salvar(Request $request){
        // var_dump($request); // mostra os dados do request

        $cliente = new Cliente();
        $cliente = $cliente->create($request->all());

        \Session::flash('mensagem_sucesso','Cliente cadastrado com sucesso!');

        // retorna o array do objeto cliente
        // return $cliente;
        return Redirect::to('clientes/novo');

    }
    public function editar($id){
        $cliente = Cliente::findOrFail($id);
        return view('clientes.create', ['cliente' => $cliente]);
    }
    public function atualizar($id, Request $request){
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());

        \Session::flash('mensagem_sucesso','Cliente atualizado com sucesso!');

        return Redirect::to('clientes/'.$cliente->id.'/editar');

    }
    public function deletar($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        \Session::flash('mensagem_sucesso','Cliente deletado com sucesso!');

        return Redirect::to('clientes');

    }
}
