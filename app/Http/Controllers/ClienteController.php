<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller


{
    public function index(){
        $cliente = Cliente::get();
        return view('clientes.index', ['clientes' => $cliente]);
    }
    public function create(){
        return view('clientes.create');
    }
    public function store(ClienteRequest $request){
        $novo_cliente = $request->all();
        Cliente::create($novo_cliente);
        return redirect()->route('clientes');
    }
    public function destroy($id){
        Cliente::find($id)->delete();
        return redirect()->route('clientes');
    }

    public function edit($id){
        $cliente = Cliente::find($id);
        return view('clientes.edit',compact('cliente'));

    }

    public function update(ClienteRequest $request,$id){
        $cliente = Cliente::find($id)->update($request->all());
        return redirect()->route('clientes');
    }



}
