<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consulta;

class HealthController extends Controller
{
    public function index() {
     
        $consultas = Consulta::all();
      
    
    return view('health.welcome',['consultas' => $consultas]);
        
    }

    public function create(){
        return view('health.create');
    }


    public function contact() {
        return view('health.contact');
    }


    public function store(Request $request) {
        $consulta= new Consulta;

        $consulta->descricao = $request->descricao;
        $consulta->especialidade = $request->especialidade;
        $consulta->cidade = $request->cidade;
        $consulta->data = $request->data;
        $consulta->hora = $request->hora;

        $consulta->save();

        return redirect('/health/welcome');
    }


    public function produtos() {
        

    $busca = request('search');//a variavel recebe oque o usuario digitou como valor no parametro search através do metodo request
    
    return view('health.produtos',['busca' => $busca]);
     }// essa rota resgata oque o usuario pesquisou na query com parametro search
    
}
