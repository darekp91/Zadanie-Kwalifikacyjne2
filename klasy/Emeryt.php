<?php


class Emeryt extends Osoba {
    
    private $dane =['emerytura'=>''];
    
    public function __construct($em) {
        $this->dane['emerytura']=$em ;
    }
            
    function getEmerytura(){
        return $this->dane['emerytura'];
        
    }
    
    public function getDochody(){
          
        $p= $this->dane['emerytura'];
        $dochod = $p+$p;
        return $dochod;
    
        
    }
    
}

