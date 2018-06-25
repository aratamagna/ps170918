<?php

class Objetivo extends Eloquent{
    
    protected $table = 'objetivos';
    public $timestamps = false;
    
        public function entrenamientos(){
            //Un objetivo tiene uno o muchos entrenamientos
            return $this->hasMany('Entrenamiento');
        }
        
    
}

