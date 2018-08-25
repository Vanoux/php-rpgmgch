<?php
//Créer une classe Product ayant les attributs et méthodes suivants :id,name,price

class Product{
    private $id;
    private $name;
    private $price;

// Avec les accesseurs nécessaires
    public function __construct($id,$name,$price)
    {
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
    }

    public function getId(){
    return $this->id;
    }
    public function getName(){
    return $this->name;
    }
    public function getPrice(){
    return $this->price;
    }
}


?>