<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
  protected $table = 'objetivos';
  //
  public function entrenamientos(){
    //Un objetivo tiene uno o muchos entrenamientos
    return $this->hasMany('App\Models\Entrenamiento');
  }
}
