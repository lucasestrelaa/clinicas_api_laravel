<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    //
    protected $table = 'historico';
    protected $fillable = [
        'data',
        'hora',
        'id_paciente',
        'id_clinica',
        'id_medico',
        'id_especialidade',
    ];
}
