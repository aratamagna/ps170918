<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
  protected $table = 'regiones';
  //
  public function comunas(){
    return $this->hasMany('App\Models\Comuna');
  }
}
