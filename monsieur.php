<?php

include('abstract.php');
class Monsieur extends User{


public function bonjour(){
    echo'==>Monsieur: Bonjour monsieur'.' ';
}

}
$monsieur=new Monsieur();
$monsieur->bonjour();
//echo $monsieur->setcordonnees('mohamed','?',28);
echo $monsieur->getcordonnees('sam','lasoi',36).'.'. '<br>';

class Madame extends User{


    public function bonjour(){
        echo'==><strong>Madame<strin/>: Bonjour madame'.' ';
    }
   
    }
    $monsieur=new Madame();
    $monsieur->bonjour();
    echo $monsieur->getcordonnees('rokaya','elbeniwi',16);