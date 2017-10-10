<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendente extends Model
{
    protected $fillable = [

            'nome','telefone','sobrenome','email','senha'


    ];

}
