<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use App\Http\Requests\VendaRequest;

class VendaController extends Controller
{

    public function index(){
        $vendas = Venda::get();
        return view('vendas.index', ['vendas' => $vendas]);
    }
    public function relatorio(){
        $vendas = Venda::get();
        return view('vendas.relatorio', ['vendas' => $vendas]);
    }
    public function create(){
        return view('vendas.create');
    }

    public function search( Request $request){
        if($request->input('dataInicial') != "" && $request->input('dataFinal') != ""){
            $venda = Venda::whereBetween('data',array($request->input('dataInicial'),array($request->input('dataFinal'))))->get();
        }else{
            $venda = Venda::get()->where('status', '=', '0');
        }
        return view('vendas.search', ['vendas' => $venda]);
    }


    public function store(VendaRequest $request){
        $novo_venda = $request->all();
        Venda::create($novo_venda);
        $idVeiculo = $request->get('veiculo_id');
        $veiculo = \App\Veiculo::find($idVeiculo);
        $veiculo->status = 1;
        $veiculo->save();
        return redirect()->route('vendas');
    }
    public function destroy($id){
        Venda::find($id)->delete();
        return redirect()->route('vendas');
    }

    public function edit($id){
        $vendas = Venda::find($id);
        return view('vendas.edit',compact('vendas'));

    }

    public function update(VendaRequest $request,$id){
        $vendas = Venda::find($id)->update($request->all());
        return redirect()->route('vendas');
    }

}

