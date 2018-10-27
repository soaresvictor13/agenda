<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
   protected $fillable = [
       'dia', 'horario', 'qtd_clientes'
   ];

   protected $casts = [
      'dia' => 'date:Y-m-d',
      'horario' => 'time:H:00',
  ];
}
