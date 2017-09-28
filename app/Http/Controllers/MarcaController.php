<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcaController extends Controller
{

    public function index(){
        $marcas = Marca::get();
        return view('marcas.index', ['marcas' => $marcas]);
    }
    public function novo(){
        return view('marcas.create');
    }
    // request para trabalhar com dados enviados via Post
    public function salvar(Request $request){
        // var_dump($request); // mostra os dados do request

        $marca = new Marca();
        $marca = $marca->create($request->all());

        \Session::flash('mensagem_sucesso','Marca cadastrado com sucesso!');

        // retorna o array do objeto marca
        // return $marca;
        return Redirect::to('marcas/novo');

    }
    public function editar($id){
        $marca = Marca::findOrFail($id);
        return view('marcas.create', ['marca' => $marca]);
    }
    public function atualizar($id, Request $request){
        $marca = Marca::findOrFail($id);
        $marca->update($request->all());

        \Session::flash('mensagem_sucesso','Marca atualizado com sucesso!');

        return Redirect::to('marcas/'.$marca->id.'/editar');

    }
    public function deletar($id){
        $marca = Marca::findOrFail($id);
        $marca->delete();

        \Session::flash('mensagem_sucesso','Marca deletado com sucesso!');

        return Redirect::to('marcas');

    }
}
