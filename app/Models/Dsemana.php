<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dsemana extends Model
{
  protected $table = 'dsemanas';
  //
  public function entrenamientos(){
    return $this->belongsToMany('App\Models\Entrenamiento');
  }
}
