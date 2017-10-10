<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtendenteController extends Controller
{
    public function index(){
        $atendente = Atendente::get();
        return view('atendente.index', ['atendente' => $atendente]);
    }
    public function create(){
        return view('atendente.create');
    }
    public function store(AtendenteRequest $request){
        $novo_atendente = $request->all();
        Atendente::create($novo_atendente);
        return redirect()->route('atendente');
    }
    public function destroy($id){
        Atendente::find($id)->delete();
        return redirect()->route('atendente');
    }

    public function edit($id){
        $atendente = Atendente::find($id);
        return view('atendente.edit',compact('atendente'));

    }

    public function update(AtendenteRequest $request,$id){
        $atendente = Atendente::find($id)->update($request->all());
        return redirect()->route('atendente');
    }



}
