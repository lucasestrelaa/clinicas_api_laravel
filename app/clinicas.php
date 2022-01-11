<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinicas extends Model
{
    //
    protected $table = 'clinicas';
    protected $fillable = [
        'nome',
        'endereco',
        'bairro',
        'imagem',
        'telefone',
        'descricao',
        'latitude',
        'longitude',
        'id_maps',
        'logo',
        'telefone2',
        'email2'

    ];
}
