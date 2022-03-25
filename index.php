<?php
//class cest une idee et l'objet cest instanciation de l'idee
//class c'est la moule de l'objet
//Attribut ou propriete variable appartenant a une classe
//Methode  une fonction appartenant a une classe
class Voiture{
public $_nom;
private $_prenom;
private $_age;
private $_niveau;
private$_echole;
private$_couleur;
public function __construct($v){

//echo'je construit';
 $this->_prenom;
 $this->_nom;
 $this->_age;

 $this->_couleur=$v;
 


}
public function nom($prenom,$nom,$age){
    return 'bonjour je suis '.$this->_prenom=$prenom.' ' .$this->_nom=$nom.' jai ' .' '.$this->_age=$age.' ' .'ans'.' ';
}
public function __destruct()
{
    //echo'je suis detruit';
    //echo $this->_nom='ahmed';
}

public function getniveau($niveau){

return $this->_niveau=$niveau;

}


}
$voiture=new Voiture('bbbb');
echo $voiture->nom('rokaya','mobarek','14').'<br>';
echo $voiture->getniveau('4eme');
