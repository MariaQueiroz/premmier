<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = [
        'placa',
        'chassi',
        'renavan',
        'cor',
        'marca_id',
        'tipo',
        'quantidade_portas',
        'tipo_combustivel',
        'cambio',
        'quilometragem',
        'preco_a_vista',
        'preco_com_troca',
        'ar_condicionado',
        'direcao_hidraulica',
        'vidro_eletrico',
        'ar_quente',
        'trava_eletrica',
        'teto_solar',
        'air_bags',
        'modelo',
        'abs',
        'status', // se for 0 está a venda; se for 1 está vendido
        'ano'
    ];


    public function marca() {
        return $this->belongsTo('App\Marca');
    }

    public function venda()
    {
        return $this->hasOne('App\Venda');
    }
}
