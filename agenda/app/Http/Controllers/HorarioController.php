<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;

class HorarioController extends Controller
{
    public function index(){
      $horarios = Horario::all();
      return $horarios->toJson();
    }

    public function show($id){
      $horario = Horario::find($id);
      return $horario->toJson();
    }

    public function store(Request $request)
    {
        // Validate the request...
        $horario = new Horario();
        $horario->dia = $request->input('dia');
        $horario->horario = $request->input('horario');
        $horario->qtd_clientes = $request->input('qtd_clientes');
        $horario->save();
        return $horario->toJson();
    }
}
