<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atendente;
use App\Http\Requests\AtendenteRequest;

class AtendenteController extends Controller
{
    public function index(){
        $atendente = Atendente::get();
        return view('atendentes.index', ['atendentes' => $atendente]);
    }
    public function create(){
        return view('atendentes.create');
    }
    public function store(AtendenteRequest $request){
        $novo_atendente = $request->all();
        Atendente::create($novo_atendente);
        return redirect()->route('atendentes');
    }
    public function destroy($id){
        Atendente::find($id)->delete();
        return redirect()->route('atendentes');
    }

    public function edit($id){
        $atendente = Atendente::find($id);
        return view('atendentes.edit',compact('atendente'));

    }

    public function update(AtendenteRequest $request,$id){
        $atendente = Atendente::find($id)->update($request->all());
        return redirect()->route('atendentes');
    }



}
