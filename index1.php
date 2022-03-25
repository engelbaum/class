<?php
// les accesseurs:getter=>lire un attribut
//               :setter=>modifier un attribut
class Velo{
private $_modell;
private $_vitesse;
public function getvitesse(){

return $this->_vitesse;

}
public function setvitesse(string $vitesse1){

return $this->_vitesse=$vitesse1;
}

public function __construct( string $modell, int $vitesse)
{
    $this->_modell=$modell;
    $this->_vitesse=$vitesse;
}

public function move(){

    return $this->_modell.  '   se deplace a'  .' ' .$this->_vitesse. 'km/h';
}





}
$velo1=new Velo('daecatlan',80);
echo $velo1->move().'<br>';
echo $velo1->setvitesse(300) .'<br>';
echo $velo1->getvitesse() ;
