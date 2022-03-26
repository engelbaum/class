<?php
require_once('classvol.php');
class Herr extends User1{
//protected $_titre='Monsieur';
public function bonjour(){

    return '=> bonjour '.$this->_titre.' : ';

}


}
$herr1=new Herr();
echo $herr1->bonjour();
//echo $herr1->seteconstruct('jawad','elias','90 ','00/00/01'). '<br>';
echo $herr1->getconstruct('mohamed','moh','40','00/00/00'). '<br>';
//echo $herr1->getsex();


class Frau extends User1{
//protected $_titre='Monsieur'; 
public function bonjour(){
    

    return '=>   bonjour '.$this->_titre1.' : ';

}


}
$frau2=new Frau();
echo $frau2->bonjour();
//echo $herr1->seteconstruct('jawad','elias','90 ','00/00/01'). '<br>';
echo $frau2->getconstruct('rzan','elbeniwi','10','00/00/00');
//echo $herr1->getsex();