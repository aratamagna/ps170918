<?php

class Tipousuario extends Eloquent{
    
    protected $table = 'tipousuarios';
    public $timestamps = false;
    
        public function users(){
            //Un tipousuario tiene una o muchas usuarios
            return $this->hasMany('User');
        }
        
    
}

