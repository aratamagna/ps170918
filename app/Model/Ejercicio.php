<?php

class Ejercicio extends Eloquent{
    
    protected $table = 'ejercicios';
    public $timestamps = false;
    
        //uno o muchas ejercicios pertenecen a un tipo de grupo muscular
        public function grupomuscular(){
            return $this->belongsTo('Grupomuscular');
        }
        
        //un entrenamiento puede pertenecer a muchos ejercicios
        public function entrenamientos(){
            return $this->belongsToMany('Entrenamiento')->withPivot('ejn_serie','ejn_repeticion','ejn_descanso');
        }
     
}

