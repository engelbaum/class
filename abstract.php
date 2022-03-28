<?php


abstract class User
{

    private $_nom;

    private $_prenom;

    private $_date_de_naissance;
    protected $_gnre = '';

    private function temps()
    {
        date('H');
        $heure = date('H');
        if ($heure >= 8 && $heure <= 12) {
            echo 'bonjour';
        } elseif ($heure > 12 && $heure <= 18) {
            echo 'bonne apres';
        } else {
            echo 'bonsoir';
        }
    }



    public function salutation()
    {

        return  $this->temps() . ' ' . $this->_gnre . '  ' . $this->get_nom() . ' ' . $this->get_prenom();
    }



    /**
     * Get the value of _nom
     */
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */
    public function set_nom($_nom)
    {
        $this->_nom = strtoupper($_nom);

        return $this;
    }

    /**
     * Get the value of _prenom
     */
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _
     *
     * 
     */
    public function set_prenom($_prenom)
    {
        $this->_prenom = strtoupper($_prenom);

        return $this;
    }

    /**
     * Get the value of _date_de_naissance
     */
    public function get_date_de_naissance()
    {
        return $this->_date_de_naissance;
    }

    /**
     * Set the value of _date_de_naissance
     *
     * @return  self
     */
    public function set_date_de_naissance($_date_de_naissance)
    {
        $this->_date_de_naissance = $_date_de_naissance;

        return $this;
    }
}
