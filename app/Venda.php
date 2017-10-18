<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = [
        'data','valor','forma_pgto','cliente_id', 'veiculo_id'
    ];

    public function cliente() {
        return $this->belongsTo('App\Cliente');
    }

    public function veiculo() {
        return $this->belongsTo('App\Veiculo');
    }
}
