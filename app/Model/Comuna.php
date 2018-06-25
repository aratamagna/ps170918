<?php

class Comuna extends Eloquent{
    
  //  protected $table = 'Comunas';
    protected $table = 'comunas';
    public $timestamps = false;
    
        //uno o muchas comunas pertenecen a una region
        public function region(){
            return $this->belongsTo('Region');
        }
        
        public function users(){
            //Una comuna tiene una o muchas usuarios
             return $this->hasMany('User');
        }
        
        
}