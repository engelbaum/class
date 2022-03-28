<?php
require_once('abstract.php');

class Herr extends User
{


    //public function slutation(){
    //return 'bonjour'.' '.$this->get_nom().' '.$this->get_prenom();

    //}


    protected $_gnre = 'monsieur';
}
$herr1 = new herr();
$herr1->set_nom('elbeniwi');
$herr1->set_prenom('jawad');
//var_dump($herr1);
//echo   strtoupper( $herr1->get_nom()).' '.$herr1->get_prenom();
echo $herr1->salutation();
