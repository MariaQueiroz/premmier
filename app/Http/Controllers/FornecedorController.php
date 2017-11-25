<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;
use App\Http\Requests\FornecedorRequest;
class FornecedorController extends Controller
{
    public function index(){
        $fornecedor = Fornecedor::get();
        return view('fornecedors.index', ['fornecedors' => $fornecedor]);
    }
    public function relatorio(){
        $fornecedor = Fornecedor::get();
        return view('fornecedors.relatorio',['fornecedors' => $fornecedor]);
    }

    public function create(){
        return view('fornecedors.create');
    }
    public function store(FornecedorRequest $request){
        $novo_fornecedor = $request->all();
        Fornecedor::create($novo_fornecedor);
        return redirect()->route('fornecedors');
    }
    public function destroy($id)
    {

        try {
            Fornecedor::find($id)->delete();
            return redirect()->route('fornecedors');
        } catch (\Exception $e) {
            \Session::flash('mensagem_nao_deleta', 'Marca não pode ser deletada!');
            return redirect()->route('fornecedors');
            //if($e->getCode() == "23000"){ //23000 is sql code for integrity constraint violation
             //return error to user here
             //\Session::flash('mensagem_nao_deleta','Marca não pode ser deletada!');
             //return redirect()->route('fornecedors');
              //}

        }
    }

    public function edit($id){
        $fornecedor = Fornecedor::find($id);
        return view('fornecedors.edit',compact('fornecedor'));

    }

    public function update(FornecedorRequest $request,$id){
        $fornecedor = Fornecedor::find($id)->update($request->all());
        return redirect()->route('fornecedors');
    }



}
