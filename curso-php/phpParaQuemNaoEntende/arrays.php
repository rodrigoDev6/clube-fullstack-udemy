<?php

//declaração de array comun sem indices especificados
$names = ['rodrigo', 28, 12345678902]; //os indices aqui começam em 0
// var_dump($names);

$person = [
    'name' => 'rodrigo',
    'age' => 28,
]; // esse tipo de array com indices especificos são chamdos pelo seu nome
// var_dump($person['name']);

//inserindo no fim do array com array push
$cart = ['pizza familia', 'pizza media'];
array_push($cart, 'pizza pequena');
// var_dump($cart);

//tirando o valor do primeiro indice do array
$itemRetired = array_shift($cart);
var_dump($cart);
var_dump($itemRetired);