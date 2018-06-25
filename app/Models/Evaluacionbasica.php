<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluacionbasica extends Model
{
  protected $table = 'evaluacionbasicas';
  //
  public function user(){
    return $this->belongsTo('App\Models\User');
  }

  //uno o muchas evaluacion_basicas pertenecen a una persona(CLIENTE)
  public function persona(){
    return $this->belongsTo('App\Models\Persona');
  }
}
