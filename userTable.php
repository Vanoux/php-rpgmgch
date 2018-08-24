<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Php-rpgmgch</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
</head>

<body>
  <h1 class="bg-dark text-white text-center display-3">userTable</h1>

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
        $users = require 'users.php';

        foreach ($users as $value) { 
        echo '<tr>';
        echo '<td>' . $value->getId() . '</td>';
        echo '<td>' . $value->getMail() . '</td>';
        echo '<td>' . $value->getDate() . '</td>';
        echo '</tr>';
        }
        ?>

      </tbody>

    </table>
  </div>

</body>

</html>