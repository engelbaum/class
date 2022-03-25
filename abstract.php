<?php
abstract class User{
private $_nom;
private $_prenom;
private $_dateNaissance;
public function getcordonnees($nom,$prenom,$dateNaissance){

    return $this->_nom=$nom.'  ' .$this->_prenom=$prenom.'  '. 'vous avez'.'  ' .$this->_dateNaissance=$dateNaissance.' '. 'ans bonne anneversaire';
}

public function setcordonnees($nom,$prenom,$dateNaissance){

    return $this->_nom=$nom;
    return $this->_prenom=$prenom;
    return $this->_dateNaissance=$dateNaissance;
}






    
}