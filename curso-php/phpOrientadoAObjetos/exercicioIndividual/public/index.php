<?php

require '../vendor/autoload.php';

use app\classes\Usuario;

$usuario = new Usuario();

try {
    $usuario->preencherDados('Rodrigo', 21975028324, 'admin');
} catch (\Exception $e) {
    echo $e->getMessage();
    die();
}
echo "Nome: {$usuario->getNome()} <br>";
echo "Telefone: {$usuario->getTelefone()} <br>";
echo "Data de Cadastro: {$usuario->getDataCadastro()} <br>";
echo "Nível: {$usuario->nivel}";
echo $usuario->cadastrar();