<?php

include_once 'PracujacyStudent.php';

class Pracownik extends Osoba {
    
   private $dane =['badania_lekarskie'=>'', 'pensja'=>''];
   
   public function __construct($ba, $pen) {
        
        $this->dane['badania_lekarskie']= $ba;
        $this->dane['pensja']= $pen;
   }
    
    function getPensja(){
        return $this->dane['pensja'];
        
    }
    
    public function getDochody(){
        $p= $this->dane['pensja'];
        $dochod = $p+$p;
        return $dochod;
    }
}

