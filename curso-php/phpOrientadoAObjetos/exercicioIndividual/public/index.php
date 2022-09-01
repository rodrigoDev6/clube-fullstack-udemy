<?php

require '../vendor/autoload.php';

use app\classes\Usuario;

$usuario = new Usuario('Rodrigo');

var_dump($usuario->name);