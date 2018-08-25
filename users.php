<?php
require 'Client.php';

//créer deux nouvelles instances de Client (avec tous les attributes initialisés)
$client1 = new Client(1, 'toto@gmail.com', date('d-m-y H:i:s'));
$client2 = new Client(2, 'fafou@gmail.com', date('d-m-y H:i:s'));

//renvoyez un tableau php de ces clients.
return [$client1,$client2];
?>