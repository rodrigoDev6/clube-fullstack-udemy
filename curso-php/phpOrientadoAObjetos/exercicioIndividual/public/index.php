<?php

require '../vendor/autoload.php';

use app\classes\Usuario as Usuario;

$usuario = new Usuario();

$usuario->preencherDados("Rodrigo", '2197502s8324', 'admin');

echo "Nome: {$usuario->getNome()} <br>";
echo "Telefone: {$usuario->getTelefone()} <br>";
echo "Data de Cadastro: {$usuario->getDataCadastro()} <br>";
echo "Nível: {$usuario->nivel}";

echo $usuario->cadastrar();