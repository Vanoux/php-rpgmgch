<?php
//Créer une classe Cloth héritant de Product et ayant les attributs et méthodes suivants :brand et try()

class Cloth extends Product{
    private $brand;
    //private $try;(crée des erreurs !)


    public function __construct($id, $name, $price, $brand) //$try(crée des erreurs !)
    {
       parent::__construct($id, $name, $price);
        $this->brand = $brand;
        //$this->try = $try;(crée des erreurs !)
    }

    public function getBrand(){
        return $this->brand;
    }
    public function try(){
    //  return $this->try;
    }
}

?>