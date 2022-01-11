<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horarios;

class horariosController extends Controller
{
    //
    public function index(){
        //return view('medico');

    }
    public function mostrar(){
        $horarios = Horarios::all();
        return json_encode($horarios);
    }
    public function mostrarUmH(){
        $horarios = Horarios::where('id', 1)->first();
        return json_encode($horarios);
    }
}
