<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VeiculoRequest;
use App\Veiculo;

class VeiculoController extends Controller
{
    public function index(){
        $veiculos = Veiculo::get()->where('status', '=', '0');
        return view('veiculos.index', ['veiculos' => $veiculos]);
    }

    public function novo(){
        return view('veiculos.create');
    }
    // request para trabalhar com dados enviados via Post
    public function salvar(VeiculoRequest $request){
        // var_dump($request); // mostra os dados do request

        $veiculo = new Veiculo();
        $veiculo = $veiculo->create($request->all());

        \Session::flash('mensagem_sucesso','Veiculo cadastrado com sucesso!');

    // retorna o array do objeto veiculo
    // return $veiculo;
        return redirect()->route('veiculos');

    }
    public function editar($id){
        $veiculo = Veiculo::findOrFail($id);
        return view('veiculos.edit', ['veiculo' => $veiculo]);
    }
    public function search( Request $request){
        if($request->input('placa') != ""){
            $veiculo = Veiculo::where('placa',"like" ,'%'.$request->input('placa').'%')->get();
        }else{
            $veiculo = Veiculo::get()->where('status', '=', '0');
        }
        return view('veiculos.search', ['veiculos' => $veiculo]);
    }

    public function atualizar($id, Request $request){
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->update($request->all());

        \Session::flash('mensagem_sucesso','Veiculo atualizado com sucesso!');

        return redirect()->route('veiculos');

    }
    public function deletar($id){
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->delete();

        \Session::flash('mensagem_sucesso','Veiculo deletado com sucesso!');

        return redirect()->route('veiculos');

    }
}
