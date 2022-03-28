<?php


require_once('abstract.php');
class Frau extends User
{

    /* public function salutation(){

        return  'bonjour'.' ' .$this->get_nom().' '. $this->get_prenom();
    }*/

    protected $_gnre = 'madame';
}
$frau = new Frau();
$frau->set_nom('louise');
$frau->set_prenom('dupond');
//var_dump($frau);
//echo    $frau->get_nom().' '.$frau->get_prenom();
echo $frau->salutation();
