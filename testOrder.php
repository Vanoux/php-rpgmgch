<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Php-rpgmgch_Test-Order</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
</head>

<body>
<!--Création d'un tableau html bootstrap -->
  <h1 class="bg-warning text-black text-center display-3">Test Order</h1>

  <div class="container-fluid">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">USERS</th>
          <th scope="col">PRODUCTS</th>
          <th scope="col">PRICE in €</th>
        </tr>
      </thead>

      <tbody>

        <?php
        //Créer un fichier testOrder.php où vous effectuerez des tests des scenarii suivants :
            //votre premier utilisateur achète un de vos légumes
            //votre second utilisateur achète un légume et un vêtement
            //Afficher toutes les informations nécessaires.
        $users = require 'users.php';
        $product = require 'products.php';


        ?>

      </tbody>

    </table>
  </div>

</body>

</html>