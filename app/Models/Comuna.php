<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
  protected $table = 'comunas';
  //
  public function region(){
    return $this->belongsTo('App\Models\Region');
  }

  public function users(){
    //Una comuna tiene una o muchas usuarios
    return $this->hasMany('App\Models\User');
  }
}
