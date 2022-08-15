<?php

$n1 = 30;
$n2 = 20;

// condicional comum
// if ($n1 > $n2) {
//     echo 'n1 maior que n2';
// } else {
//     echo 'falso';
// }

// condicional tratada para encerrar o código com return
// if ($n1 > $n2) {
//     echo 'n1 maior que n2';
//     return; //finaliza o código aqui
// }
// echo 'chocolate';

// condiiconal com operador ternário
$result = $n1 > $n2 || 'true' == true; //é possível usar mais comparacoes lógicas

// ?(se sim), :(senão)
echo $result ? 'é verdadeiro' : 'é falso'; // se $result é true retorna 'é verdadeiro' senão  'é falso'
