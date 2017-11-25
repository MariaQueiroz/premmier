<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo;
use App\Http\Requests\ModeloRequest;

class ModeloController extends Controller
{
    public function index(){
        $modelo = Modelo::get();
        return view('modelos.index', ['modelos' => $modelo]);
    }
    public function create(){
        return view('modelos.create');
    }
    public function store(ModeloRequest $request){
        $novo_modelo = $request->all();
        Modelo::create($novo_modelo);
        return redirect()->route('modelos');
    }
    public function destroy($id){

        Modelo::find($id)->delete();
        return redirect()->route('modelos');
    }

    public function edit($id){
        $modelo = Modelo::find($id);
        return view('modelos.edit',compact('modelo'));

    }

    public function update(ModeloRequest $request,$id){
        $modelo = Modelo::find($id)->update($request->all());
        return redirect()->route('modelos');
    }



}
