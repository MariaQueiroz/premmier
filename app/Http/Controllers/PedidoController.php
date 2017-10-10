<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Pedido;
use App\Http\Requests\PedidoRequest;
class PedidoController extends Controller

{

    public function index(){
        $pedidos = Pedido::get();
        return view('pedidos.index', ['pedidos' => $pedidos]);
    }
    public function create(){
        return view('pedidos.create');
    }
    public function store(PedidoRequest $request){
        $novo_pedido = $request->all();
        Pedido::create($novo_pedido);
        return redirect()->route('pedidos');
    }
    public function destroy($id){
        Pedido::find($id)->delete();
        return redirect()->route('pedidos');
    }

    public function edit($id){
        $pedidos = Pedido::find($id);
        return view('pedidos.edit',compact('pedido'));

    }

    public function update(PedidoRequest $request,$id){
        $pedidos = Pedido::find($id)->update($request->all());
        return redirect()->route('pedidos');
    }
}
