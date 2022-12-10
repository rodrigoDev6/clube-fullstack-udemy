<?php

use core\Controller;

require('../bootstrap.php');

echo '<h1>Olá mundo</h1> <br>';
$controller = new Controller;

dd($controller->uri);



?>