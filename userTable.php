<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Php-rpgmgch_User-Table</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
</head>

<body>
<!--Création d'un tableau html bootstrap -->
  <h1 class="bg-success text-white text-center display-3">User Table</h1>
  <h5 class="bg-light text-black text-left"><a href= "/productTable.php">Lien Product Table</a></h5>

  <div class="container-fluid">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">EMAIL</th>
          <th scope="col">CREATE AT</th>
        </tr>
      </thead>

      <tbody>

        <?php
        //Récupérer la liste des clients et générer le tableau html affichant l'ensemble de leur informations
        $users = require 'users.php';

        //Pour chaques $users du fichier users.php qui a une $value renvoyer les fonctions définies dans la class User
        foreach ($users as $value) { 
        echo '<tr>';
        echo '<td>' . $value->getId() . '</td>';
        echo '<td>' . $value->getEmail() . '</td>';
        echo '<td>' . $value->getCreateAt() . '</td>';
        echo '</tr>';
        }
        ?>

      </tbody>

    </table>
  </div>

</body>

</html>