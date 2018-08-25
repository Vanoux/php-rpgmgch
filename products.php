<?php
//Créer un fichier products.php qui retourne un tableau contenant deux légumes et trois vêtements. (avec tous les attributes initialisés)

require 'Product.php';
require 'Vegetable.php';
require 'Cloth.php';

$legume1 = new Vegetable(1, 'Carrot', 1, 'Maraichers des Landes', date('d-m-y'));
$legume2 = new Vegetable(2, 'Red pepper', 2, 'Occitania maraichage', date('d-m-y'));
$vetement1 = new Cloth(1, 'Tshirt', 10, 'Adidas');
$vetement2 = new Cloth(2, 'Pants', 20, 'Quechua');
$vetement3 = new Cloth(3, 'Hiking boots', 80, 'Salomon');

return [$legume1, $legume2, $vetement1, $vetement2, $vetement3];

?>