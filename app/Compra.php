<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [

            'data','valor','fornecedor_id','veiculo_id'


    ];
    public function fornecedor() {
        return $this->belongsTo('App\Fornecedor');
    }

    public function veiculo() {
        return $this->belongsTo('App\Veiculo');
    }
}

