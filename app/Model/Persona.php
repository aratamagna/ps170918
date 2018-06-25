<?php

class Persona extends Eloquent{
    

    protected $table = 'personas';
    public $timestamps = false;
    
        //uno o muchas personas pertenecen a un Sexo
        public function sexo(){
            return $this->belongsTo('Sexo');
        }
           
        public function users(){
            //Una persona tiene una o muchas usuarios
             return $this->hasMany('User');
        }
        
        public function evaluacionbasicas(){
            //Una persona(CLIENTE) tiene una o muchas evaluaciones básicas
             return $this->hasMany('Evaluacionbasica');
        }
        
        //una persona puede pertenecer a muchos entnombres
       public function entnombres(){
            return $this->belongsToMany('Entnombre')->withPivot('enp_fecha','enp_hora','enp_comentario','user_id');
        }
       
        
        
}
