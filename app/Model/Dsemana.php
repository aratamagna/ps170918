<?php

class Dsemana extends Eloquent{
    
    protected $table = 'dsemanas';
    public $timestamps = false;
    
        //un dsemana puede pertenecer a muchos entrenamientos
        public function entrenamientos(){
            return $this->belongsToMany('Entrenamiento');
        }
    

}

