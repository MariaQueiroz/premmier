<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtendenteController extends Controller
{

    public function index(){
        $atendentes = Atendente::get();
        return view('atendentes.index', ['atendentes' => $atendentes]);
    }
    public function novo(){
        return view('atendentes.create');
    }
    // request para trabalhar com dados enviados via Post
    public function salvar(Request $request){
        // var_dump($request); // mostra os dados do request

        $atendente = new Atendente();
        $atendente = $atendente->create($request->all());

        \Session::flash('mensagem_sucesso','Atendente cadastrado com sucesso!');

        // retorna o array do objeto atendente
        // return $atendente;
        return Redirect::to('atendentes/novo');

    }
    public function editar($id){
        $atendente = Atendente::findOrFail($id);
        return view('atendentes.create', ['atendente' => $atendente]);
    }
    public function atualizar($id, Request $request){
        $atendente = Atendente::findOrFail($id);
        $atendente->update($request->all());

        \Session::flash('mensagem_sucesso','Atendente atualizado com sucesso!');

        return Redirect::to('atendentes/'.$atendente->id.'/editar');

    }
    public function deletar($id){
        $atendente = Atendente::findOrFail($id);
        $atendente->delete();

        \Session::flash('mensagem_sucesso','Atendente deletado com sucesso!');

        return Redirect::to('atendentes');

    }
}
