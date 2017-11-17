<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
use App\Http\Requests\MarcaRequest;

class MarcaController extends Controller
{
    public function index(){
        $marca = Marca::get();
        return view('marcas.index', ['marcas' => $marca]);
    }
    public function create(){
        return view('marcas.create');
    }
    public function store(MarcaRequest $request){
        $novo_marca = $request->all();
        Marca::create($novo_marca);
        return redirect()->route('marcas');
    }
    public function destroy($id){

        try {
            Marca::find($id)->delete();
            return redirect()->route('marcas');
        } catch (\Exception $e) {
            \Session::flash('mensagem_nao_deleta','Marca não pode ser deletada!');
            return redirect()->route('marcas');
            //if($e->getCode() == "23000"){ //23000 is sql code for integrity constraint violation
                // return error to user here
               // \Session::flash('mensagem_nao_deleta','Marca não pode ser deletada!');
               // return redirect()->route('marcas');
          //  }

        }
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

