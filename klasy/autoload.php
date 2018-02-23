<?php

function myClassLoader($osoba){
    
    require ('klasy/'.$osoba.'.php');
    return true;
}

spl_autoload_register('myClassLoader');



