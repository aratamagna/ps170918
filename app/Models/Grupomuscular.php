<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupomuscular extends Model
{
  protected $table = 'grupomusculares';
  //
  public function ejercicios(){
    //Un grupomuscular tiene una o muchos ejercicios
    return $this->hasMany('App\Models\Ejercicio');
  }
}
