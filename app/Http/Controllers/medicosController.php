<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicos;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
use Redirect;

class medicosController extends Controller
{
    //
    public function index(){
        //return view('medico');

    }
    public function add(Request $request){
        //$medicos = Medicos::all();
        //return json_encode($medicos);
        $medicos = new Medicos();
        $medicos = $medicos->create( $request->all());
        //\Session::flash('msg_add', 'Usuário salvo com sucesso!');
        return response()->json($medicos);
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
