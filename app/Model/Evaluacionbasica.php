<?php

class Evaluacionbasica extends Eloquent{
    
  //  protected $table = 'Comunas';
    protected $table = 'evaluacionbasicas';
    public $timestamps = false;
        
        //uno o muchas evaluacion_basicas pertenecen a un usuario(ENTRENADOR)
        public function user(){
            return $this->belongsTo('User');
        }
        
        //uno o muchas evaluacion_basicas pertenecen a una persona(CLIENTE)
        public function persona(){
            return $this->belongsTo('Persona');
        }
        
        
}