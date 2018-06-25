<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
  protected $table = 'tipousuarios';

  public function users(){
    //Un tipousuario tiene una o muchas usuarios
    return $this->hasMany('App\Models\User');
  }
}
