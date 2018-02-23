<?php
error_reporting(E_ALL ^ E_NOTICE);

include_once 'Student.php';
include_once 'Pracownik.php';
include_once 'Emeryt.php';

 class Osoba {
    
    private $dane =['imie'=>'', 'nazwisko'=>'', 'data_urodzenia'=>'', 'wiek'=>''];
    
    public function __construct($im, $na, $ur, $la) {
        $this->dane['imie']= $im;
        $this->dane['nazwisko']= $na;
        $this->dane['data_urodzenia']= $ur;
        $this->dane['wiek']= $la;
    }
    
    function getDane(){
        return $this->dane['imie'].' '. $this->dane['nazwisko'].', ';
    }
            
    //public function getDochody(){
      // $dostu= new Student('123456', '500');
       //$dopra= new Pracownik('cos', '2678');
      // $doem= new Emeryt('1234');
       //$kasastu= $dostu->getStypendium();
       //$kasapra= $dopra->getPensja();
       //$kasaem= $doem->getEmerytura();
       //$dochod = $kasastu + $kasapra + $kasaem;
        //return $dochod;
        
    //}
    
    function setWiek(){
        $dzis = time();
        $wiek= round(($dzis - strtotime($this->dane['data_urodzenia']))/60/60/24/365,0);
        
        return 'lat: '.$wiek.', ';
        
    }
  
    
}
$ludz = new Osoba('Jan', 'Kowalski', '13.03.1996','22');
$student = new Student('3245', '500');

//echo $ludz->getDane().$ludz->setWiek().$student->getNumerIndeksu();


