<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\User;



class HealthController extends Controller
{
    public function index() {
     
        $consultas = Consulta::all();
      
    
     return view('layouts/welcome',['consultas' => $consultas]);
        
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
        
        
        $user = auth()->user();
        $consulta->user_id = $user->id;
       
        $consulta->save();

        return redirect('/')->with('msg','Consulta agendada com sucesso!');
    }

    public function show($id){

        $consulta = Consulta::findOrFail($id);

        $eventOwner = User::where('id', $consulta->user_id)->first()->toArray();

        return view('health.show',['consulta'=>$consulta, 'eventOwner' => $eventOwner]);
    }

    public function dashboard() {
     $user = auth()->user();
     $consultas = $user->consultas;

     return view('health.dashboard',['consultas'=>$consultas]);
    }

    public function destroy($id) {

     Consulta::findOrFail($id)->delete();

     return redirect('/dashboard')->with('msg','Consulta desmarcada com sucesso !');
    } 

    public function edit($id){

        $consultas = Consulta::findOrFail($id);

        return view('health.edit', ['consulta' => $consultas]);

    }

    public function update(Request $request) {

        Consulta::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard')->with('msg','Agendamento editado com sucesso!');
    }
}



