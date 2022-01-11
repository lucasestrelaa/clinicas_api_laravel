<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Historico;

class historicoController extends Controller
{
    //
    public function index(){
        //return view('medico');

    }
    public function mostrar(){
        $historicos = Historico::all();
        return json_encode($historicos);
    }
    public function mostrarUmHs(){
        $historicos = Historico::where('id', 1)->first();
        return json_encode($historicos);
    }
}
