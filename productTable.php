<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Php-rpgmgch_Product-Table</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
</head>

<body>
<!--Création d'un tableau html bootstrap -->
  <h1 class="bg-info text-white text-center display-3">Product Table</h1>
  <h5 class="bg-light text-black text-left"><a href= "/testOrder.php">Lien Test Order</a></h5>

  <div class="container-fluid">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NAME</th>
          <th scope="col">PRICE in €</th>
          <th scope="col">PRODUCTOR NAME OR BRAND</th>
          <th scope="col">EXPIRE AT</th>
          <th scope="col">IS FRESH</th>
          <!--<th scope="col">BRAND</th>-->
        </tr>
      </thead>

      <tbody>

        <?php
        //Générer le tableau html avec la liste des produits récemment créés
        $product = require 'products.php';

        foreach ($product as $value) { 
        echo '<tr>';
        echo '<td>' . $value->getId() . '</td>';
        echo '<td>' . $value->getName() . '</td>';
        echo '<td>' . $value->getPrice() . '</td>';

        //method_exists = Vérifie si la méthode existe pour une classe (Ne fonctionne pas sans cette fonction de classes/objets = Uncaught Error!)
        if(method_exists($value, 'getProductorName')){
            echo '<td>' . $value->getProductorName() . '</td>';
        }

        if(method_exists($value, 'getProductorName')){
            echo '<td>' . $value->getExpireAt() . '</td>';
        }

        if(method_exists($value, 'isFresh')){
            //echo '<td>' . $value->isFresh() . '</td>';
            if($value->isFresh()){ // Vérifie si la condition de la function isFresh() est true ou false
                echo '<td>FRESH</td>';
            }else {
                echo '<td>EXPIRED</td>';
            }
        }

        if(method_exists($value, 'getBrand')){
            echo '<td>' . $value->getBrand() . '</td>';
        }
        
        echo '</tr>';
        }
        ?>

      </tbody>

    </table>
  </div>

</body>

</html>