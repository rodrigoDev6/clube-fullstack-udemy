<?php

require '../vendor/autoload.php';

use app\classes\Usuario;

$usuario = new Usuario();

try {
    $usuario->preencherDados('Rodrigo', 21975028324, 1);
} catch (\Exception $e) {
    echo $e->getMessage();
    die();
}
try {
    echo "Nome: {$usuario->getNome()} <br>";
    echo "Telefone: {$usuario->getTelefone()} <br>";
    echo "Data de Cadastro: {$usuario->getDataCadastro()} <br>";
    echo "Nível: {$usuario->nivel} <br>";
    echo $usuario->cadastrar();
} catch (\Exception $e) {
    $e->getMessage();
}