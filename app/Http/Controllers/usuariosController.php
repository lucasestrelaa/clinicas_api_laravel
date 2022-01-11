<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;

class usuariosController extends Controller
{
    //
    public function index(){
        //return view('medico');

    }
    public function mostrar(){
        $usuarios = Usuarios::all();
        return json_encode($usuarios);
    }
    public function mostrarUmU(){
        $usuarios = Usuarios::where('id', 1)->first();
        return json_encode($usuarios);
    }
}
