<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;
use App\Http\Requests\CompraRequest;
class CompraController extends Controller
{

    public function index(){
        $compras = Compra::get();
        return view('compras.index', ['compras' => $compras]);
    }
    public function create(){
        return view('compras.create');
    }
    public function store(CompraRequest $request){
        $novo_compra = $request->all();
        Compra::create($novo_compra);
        return redirect()->route('compras');
    }
    public function destroy($id){
        Compra::find($id)->delete();
        return redirect()->route('compras');
    }

    public function edit($id){
        $compras = Compra::find($id);
        return view('compras.edit',compact('compras'));

    }

    public function update(CompraRequest $request,$id){
        $compras = Compra::find($id)->update($request->all());
        return redirect()->route('compras');
    }




}
