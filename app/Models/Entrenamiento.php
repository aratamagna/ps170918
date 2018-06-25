<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrenamiento extends Model
{
  protected $table = 'entrenamientos';
  //

  public function objetivo(){
    return $this->belongsTo('App\Models\Objetivo');
  }

  //uno o muchos entrenamientos pertenecen a un entrenamientonombre
  public function entnombre(){
    return $this->belongsTo('App\Models\Entnombre');
  }

  //un entrenamiento puede pertenecer a muchos dsemanas
  public function dsemanas(){
    return $this->belongsToMany('App\Models\Dsemana');
  }

  //un entrenamiento puede pertenecer a muchos ejercicios
  public function ejercicios(){
    return $this->belongsToMany('App\Models\Ejercicio')->withPivot('ejn_serie','ejn_repeticion','ejn_descanso');
  }
}
