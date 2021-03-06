<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Persona;

class Sexo extends Model
{
  protected $table = 'sexos';
  //
  public function personas(){
    //Un sexo tiene una o muchas personas
    return $this->hasMany('App\Models\Persona');
  }
}
