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
        'id_marca',
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
        'abs',
        'ano'

    ];

}
