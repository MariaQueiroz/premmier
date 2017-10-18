<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = [
            'nome'
    ];

    public function veiculos()
    {
        return $this->hayMany('App\Veiculo');
    }
}
