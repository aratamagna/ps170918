<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entnombre extends Model
{
  protected $table = 'entnombres';
  //
  public function entrenamientos(){
    //Un entnombre tiene una o muchos entrenamientos
    return $this->hasMany('App\Models\Entrenamiento');
  }

  //un entnombre puede pertenecer a muchas personas
  public function personas(){
    return $this->belongsToMany('App\Models\Persona')->withPivot('enp_fecha','enp_hora','enp_comentario','user_id');
  }
}
