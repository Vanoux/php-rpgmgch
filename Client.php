<?php
require 'User.php';
require 'Product.php';

//Créer une classe Client héritant de User
class Client extends User{
    //Ajouter l'attribut (et ses accesseurs) billAmount et cart qui est un tableau de Product.
    private $billAmount;
    private $cart;

    public function __construct($id, $email, $createAt) //$billAmount, $cart)
    {
        parent::__construct($id, $email, $createAt);
        // $this->billAmount;
        // $this->cart[];
    }

    public function getBillAmount(){
        return $this->billAmount;
    }
    public function getCart(){
        return $this->cart;
    }

    //Ajouter la méthode addProductToCart($product) qui ajoute un produit au panier du client.
    public function addProductToCart($product){
        $this->cart[] = $product;
    }

    //Créer la méthode publique buy()
    //implémenter la méthode buy pour qu'elle prenne en paramètre un objet de classe Product.
    //A chaque fois qu'un client achète un produit, sa facture augment du prix du produit et ce produit est ajouté au panier.
    public function buy($product){ 
        $this->addProductToCart($product);
       // $this->billAmount = $this->billAmount + $this->getPrice();
    }
}

?>