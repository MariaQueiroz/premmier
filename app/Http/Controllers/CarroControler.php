<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarroControler extends Controller
{
    //
    public function index(){
        $nome = 'Maria';
        return view('carro', ['nome'=>$nome]);

    }
}
