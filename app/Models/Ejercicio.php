<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
  protected $table = 'ejercicios';
  //
  public function grupomuscular(){
    return $this->belongsTo('App\Models\Grupomuscular');
  }

  //un entrenamiento puede pertenecer a muchos ejercicios
  public function entrenamientos(){
    return $this->belongsToMany('App\Models\Entrenamiento')->withPivot('ejn_serie','ejn_repeticion','ejn_descanso');
  }
}
