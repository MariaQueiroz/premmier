<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{

    public function index(){
        $fornecedors = Fornecedor::get();
        return view('fornecedors.index', ['fornecedors' => $fornecedors]);
    }
    public function novo(){
        return view('fornecedors.create');
    }
    // request para trabalhar com dados enviados via Post
    public function salvar(Request $request){
        // var_dump($request); // mostra os dados do request

        $fornecedor = new Fornecedor();
        $fornecedor = $fornecedor->create($request->all());

        \Session::flash('mensagem_sucesso','Fornecedor cadastrado com sucesso!');

        // retorna o array do objeto fornecedor
        // return $fornecedor;
        return Redirect::to('fornecedors/novo');

    }
    public function editar($id){
        $fornecedor = Fornecedor::findOrFail($id);
        return view('fornecedors.create', ['fornecedor' => $fornecedor]);
    }
    public function atualizar($id, Request $request){
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->update($request->all());

        \Session::flash('mensagem_sucesso','Fornecedor atualizado com sucesso!');

        return Redirect::to('fornecedors/'.$fornecedor->id.'/editar');

    }
    public function deletar($id){
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->delete();

        \Session::flash('mensagem_sucesso','Fornecedor deletado com sucesso!');

        return Redirect::to('fornecedors');

    }
}
