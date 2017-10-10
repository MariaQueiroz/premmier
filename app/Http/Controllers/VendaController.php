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
    public function create(){
        return view('vendas.create');
    }
    public function store(VendaRequest $request){
        $novo_venda = $request->all();
        Venda::create($novo_venda);
        return redirect()->route('vendas');
    }
    public function destroy($id){
        Venda::find($id)->delete();
        return redirect()->route('vendas');
    }

    public function edit($id){
        $vendas = Venda::find($id);
        return view('vendas.edit',compact('venda'));

    }

    public function update(VendaRequest $request,$id){
        $vendas = Venda::find($id)->update($request->all());
        return redirect()->route('vendas');
    }

}
