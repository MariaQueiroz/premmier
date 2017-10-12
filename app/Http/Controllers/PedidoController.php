<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Http\Requests\PedidoRequest;

class PedidoController extends Controller
{
    public function index(){
        $pedido = Pedido::get();
        return view('pedidos.index', ['pedidos' => $pedido]);
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
        $pedido = Pedido::find($id);
        return view('pedidos.edit',compact('pedido'));

    }

    public function update(PedidoRequest $request,$id){
        $pedido = Pedido::find($id)->update($request->all());
        return redirect()->route('pedidos');
    }



}
