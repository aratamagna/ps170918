<?php

class Entnombre extends Eloquent{
    
    protected $table = 'entnombres';
    public $timestamps = false;
    
        public function entrenamientos(){
            //Un entnombre tiene una o muchos entrenamientos
            return $this->hasMany('Entrenamiento');
        }
        
        //un entnombre puede pertenecer a muchas personas
        public function personas(){
            return $this->belongsToMany('Persona')->withPivot('enp_fecha','enp_hora','enp_comentario','user_id');
        }
         //un entnombre puede pertenecer a muchas personas
       /* public function users(){
            return $this->belongsToMany('User')->withPivot('enp_fecha','enp_hora','enp_comentario','user_id');
        }*/
        
       
    
}


