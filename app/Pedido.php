<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [

            'valor','cliente_id','modelo','data','descricao'


    ];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}

