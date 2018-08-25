<?php
//Créer une classe Vegetable héritant de Product et ayant les attributs et méthodes suivants :
//productorName
//expiresAt
//isFresh()

class Vegetable extends Product{
    private $productorName;
    private $expiresAt;
    //private $isFresh;(crée des erreurs !)

    public function __construct($id, $name, $price, $productorName, $expiresAt) //$isFresh(crée des erreurs !)
    {
        parent::__construct($id, $name, $price);
        $this->productorName = $productorName;
        $this->expiresAt = $expiresAt;
        //$this->isFresh = $isFresh;(crée des erreurs!)  
    }

    public function getProductorName(){
        return $this->productorName;
    }
    public function getExpireAt(){
        return $this->expiresAt;
    }

    //Implémenter la méthode fresh qui retourne un booléen, 
    //vrai si le produit peut être consommé (avant sa date d'expiration), faux sinon.
    public function isFresh(){

        if($this->expiresAt < date('d-m-y')){ // Si en dessous de la date d'aujourd'hui = OK
            $this->isFresh = true;
        } else {
            $this->isFresh = false; // sinon expire à la date d'aujourd'hui
        }
        return $this->isFresh;
    }

}

?>