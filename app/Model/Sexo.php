<?php

class Sexo extends Eloquent{
    
    //protected $table = 'Regiones';
    protected $table = 'sexos';
    public $timestamps = false; 
    
        public function personas(){
            //Un sexo tiene una o muchas personas
             return $this->hasMany('Persona');
        }
}
