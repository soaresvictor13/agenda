<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index(){
      return "Hello Word!";
    }
    
    public function show($id){
      return $id;
    }
}
