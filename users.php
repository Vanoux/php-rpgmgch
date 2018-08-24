<?php
require 'Client.php';

$client1 = new Client(1, 'toto@gmail.com', date('d-m-y H:i:s'));
$client2 = new Client(2, 'fafou@gmail.com', date('d-m-y H:i:s'));

return [$client1,$client2];
?>