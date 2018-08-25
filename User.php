<?php
//Créer une classe User
class User{
//Avec ces attributes privés
    private $id;
    private $email;
    private $createAt;

//Ajouter les accesseurs nécessaires
    public function __construct($id,$email,$createAt)
    {
      $this->id = $id;
      $this->email = $email;
      $this->createAt = $createAt;
    }

    public function getId(){
        return $this->id;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCreateAt(){
        return $this->createAt;
    }
}

?>