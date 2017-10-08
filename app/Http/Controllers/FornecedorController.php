<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;
use App\Http\Requests\FornecedorRequest;
class FornecedorController extends Controller
{
    public function index(){
        $fornecedor = Fornecedor::get();
        return view('fornecedor.index', ['fornecedor' => $fornecedor]);
    }
    public function create(){
        return view('fornecedor.create');
    }
    public function store(FornecedorRequest $request){
        $novo_fornecedor = $request->all();
        Fornecedor::create($novo_fornecedor);
        return redirect()->route('fornecedor');
    }
    public function destroy($id){
        Fornecedor::find($id)->delete();
        return redirect()->route('fornecedor');
    }

    public function edit($id){
        $fornecedor = Fornecedor::find($id);
        return view('fornecedor.edit',compact('fornecedor'));

    }

    public function update(FornecedorRequest $request,$id){
        $fornecedor = Fornecedor::find($id)->update($request->all());
        return redirect()->route('fornecedor');
    }



}
