<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //
    protected $table = 'usuario';
    protected $fillable = [
        'nome',
        'endereco',
        'bairro',
        'cpf',
        'rg',
        'data_nascimento',
        'email',
        'dependente',
        'titular',
    ];
}
