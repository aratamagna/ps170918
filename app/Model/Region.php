<?php

class Region extends Eloquent{
    
    //protected $table = 'Regiones';
    protected $table = 'regiones';
    public $timestamps = false; 
    
        public function comunas(){
            //Una region tiene una o muchas comunas
           // return $this->hasMany('Comuna','com_reg_cod','reg_cod');
          // return $this->hasMany('Comuna','com_reg_cod');
             return $this->hasMany('Comuna');
        }
}

