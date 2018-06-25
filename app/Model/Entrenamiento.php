<?php

class Entrenamiento extends Eloquent{
    
  //  protected $table = 'Comunas';
    protected $table = 'entrenamientos';
    public $timestamps = false;
    
        //uno o muchos entrenamientos pertenecen a un objetivo
        public function objetivo(){
            return $this->belongsTo('Objetivo');
        }
        
        //uno o muchos entrenamientos pertenecen a un entrenamientonombre
        public function entnombre(){
            return $this->belongsTo('Entnombre');
        }
        
        //un entrenamiento puede pertenecer a muchos dsemanas
        public function dsemanas(){
            return $this->belongsToMany('Dsemana');
        }
        
        //un entrenamiento puede pertenecer a muchos ejercicios
        public function ejercicios(){
            return $this->belongsToMany('Ejercicio')->withPivot('ejn_serie','ejn_repeticion','ejn_descanso');
        }
        
        
        
}