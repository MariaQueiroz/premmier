<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [

            'valor','cliente_id','veiculo_id'


    ];
    public function veiculo()
    {
        return $this->hayOne('App\veiculo');
    }


    public function cliente()
    {
        return $this->hayMany('App\Cliente');
    }
}

