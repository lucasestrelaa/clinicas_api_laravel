<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicos;

class medicosController extends Controller
{
    //
    public function index(){
        //return view('medico');

    }
    public function mostrar(){
        $medicos = Medicos::all();
        return json_encode($medicos);
    }
    public function mostrarUmM(){
        $medicos = Medicos::where('id', 1)->first();
        return json_encode($medicos);
    }
}
