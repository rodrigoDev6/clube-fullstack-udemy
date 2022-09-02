<?php

require '../vendor/autoload.php';

use app\classes\Usuario as Usuario;

$usuario = new Usuario();
$usuario->preencherDados('Rodrigo', 21975028324, 'admin');
echo $usuario->getNome();
echo $usuario->getTelefone();
echo $usuario->getDataCadastro();
echo $usuario->cadastrar();