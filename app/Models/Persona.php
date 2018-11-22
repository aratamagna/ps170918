<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Sexo;
use App\User;
use App\Models\Evaluacionbasica;
use App\Models\Entnombre;

class Persona extends Model
{
  public $timestamps = false;

  protected $table = 'personas';

  public function sexo(){
    return $this->belongsTo('App\Models\Sexo');
  }

  public function users(){
    //Una persona tiene una o muchas usuarios
    return $this->hasMany('App\Models\User');
  }

  public function evaluacionbasicas(){
    //Una persona(CLIENTE) tiene una o muchas evaluaciones básicas
    return $this->hasMany('App\Models\Evaluacionbasica');
  }

  //una persona puede pertenecer a muchos entnombres
  public function entnombres(){
    return $this->belongsToMany('App\Models\Entnombre')->withPivot('enp_fecha','enp_hora','enp_comentario','user_id');
  }
}
