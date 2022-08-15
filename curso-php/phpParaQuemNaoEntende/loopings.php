<?php

// ==for
// $number = 10;
// for ($i = 0; $i <= 10; $i++) {
//     //nesta condição simples estou contando i até ele ser menor ou igual a 10
//     echo $i;
// }
// $person = ['name' => 'rodrigo', 'age' => 21, 'average' => 5.8];
// for ($i = 0; $i <= count($person); $i++) {
//     echo $i;
// }

// foreach
$names = ['rodrigo', 'maria', 'julia'];

foreach ($names as $key => $name) {
    echo 'nome = ' . $name . ';'; //imprime todos os itens do array, pois é feita uma varredura no mesmo
}