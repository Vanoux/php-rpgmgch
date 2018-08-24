<?php

class User{

    private $id;
    private $email;
    private $createAt;

    // public function __construct($id,$email,$createAt)
    // {
    //   $this->id = $id;
    //   $this->email = $email;
    //   $this->createAt = $createAt;
    // }

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