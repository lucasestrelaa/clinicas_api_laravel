<?php

namespace App\Http\Controllers;

use App\Clinicas;
use Illuminate\Http\Request;

class clinicasController extends Controller
{
    //
    public function index(){
        //return view('medico');

    }
    public function mostrar(){
        $clinicas = Clinicas::all();
        return json_encode($clinicas);
    }
    public function mostrarUmM(){
        $clinicas = Clinicas::where('id', 1)->first();
        return json_encode($clinicas);
    }
}
