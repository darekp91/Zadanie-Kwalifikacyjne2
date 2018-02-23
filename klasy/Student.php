<?php
include_once 'PracujacyStudent.php';

class Student extends PracujacyStudent {
    
    private $dane =['nr_indeksu'=>'', 'stypendium'=>''];
    
    public function __construct($in, $sty) {
        
        $this->dane['nr_indeksu']= $in;
        $this->dane['stypendium']= $sty;
        parent::__construct($ba, $pen);
        
    }
            
     function getStypendium(){
         
         return $this->dane['stypendium'];
         
    }
    
    
    public function getDochody() {
          
        $p= $this->dane['stypendium'];
        $dochod = $p+$p;
        return $dochod;
    }
        
    
    
    function getNumerIndeksu(){
        
        return 'student nr: '.$this->dane['nr_indeksu'].'.</br>';
    }
}


