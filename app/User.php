<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Models\Persona;
use App\Models\TipoUsuario;
use App\Models\Comuna;
use App\Models\Evaluacionbasica;

class User extends Authenticatable
{
  public $timestamps = false;

  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'email', 'password',
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  public function tipousuario(){
    return $this->belongsTo('App\Models\TipoUsuario');
  }

  //uno o muchas usuarios pertenecen a una comuna
  public function comuna(){
    return $this->belongsTo('App\Models\Comuna');
  }

  public function persona(){
    //Uno o muchos usuarioss pertenecen a
    return $this->belongsTo('App\Models\Persona');
  }

  public function evaluacionbasicas(){
    //Un usuario(ENTRENADOR) tiene una o muchas evaluaciones básicas
    return $this->hasMany('App\Models\Evaluacionbasica');
  }
}
