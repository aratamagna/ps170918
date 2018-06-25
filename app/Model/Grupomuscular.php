<?php

class Grupomuscular extends Eloquent{
    
    protected $table = 'grupomusculares';
    public $timestamps = false;
    
        public function ejercicios(){
            //Un grupomuscular tiene una o muchos ejercicios
            return $this->hasMany('Ejercicio');
        }
        
    
}

