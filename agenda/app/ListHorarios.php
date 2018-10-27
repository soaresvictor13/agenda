<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListHorarios extends Model
{
  protected $fillable = [
     'horario_id', 'user_id'
  ];
}
