<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
            'nome','telefone','email','endereco','cpf','rg'
    ];


    public function vendas()
    {
        return $this->hayMany('App\Venda');
    }
}
