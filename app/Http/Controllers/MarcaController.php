<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Http\Requests\MarcaRequest;
class MarcaController extends Controller
{

    public function index(){
        $marcas = Marca::get();
        return view('marcas.index', ['marcas' => $marcas]);
    }
    public function novo(){
        return view('marcas.create');
    }
    public function store(MarcaRequest $request){
        $novo_marca = $request->all();
        Marca::create($novo_marca);
        return redirect()->route('marcas');
    }
    public function destroy($id){
        Marca::find($id)->delete();
        return redirect()->route('marcas');
    }

    public function edit($id){
        $marca = Marca::find($id);
        return view('marcas.edit',compact('marca'));

    }

    public function update(MarcaRequest $request,$id){
        $marca = Marca::find($id)->update($request->all());
        return redirect()->route('marcas');
    }

}

