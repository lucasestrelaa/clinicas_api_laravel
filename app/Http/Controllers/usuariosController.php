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
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function teste(Request $request){
        //$client_token = md5(substr( md5($data['email']), 0, 4) . '%' . date('H:i:s'));
        //$datajson =  json_encode($data);
        // $users = new User();
        // $users = $users->$data;

        $nome = $request->input('name');
        
        return json_encode($nome);
    }
}
