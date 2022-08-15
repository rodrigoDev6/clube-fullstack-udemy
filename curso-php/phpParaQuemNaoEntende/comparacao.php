<?php

// simbolos de comparacao simples:<(menor que), >(maior que), <=(menor ou igua a), >=(maior ou igual a)
// simbolos de comparacao complexos: !=(não é igual a),!==(é diferente de e seu tipo também), <>(não é igual a), ==(é igual a), ===(é igual a e seu tipo tambem),

// exmplos de comparacao
/*
var_dump(1 == '1'); //verifica se 1 é igual a '1'
var_dump(1 === '1'); //verifica se 1 é igual a '1' e seu tipo também é igual
var_dump(1 != '1'); //verifica se 1 é diferemte de '1'
var_dump(1 !== '1'); //verifica se 1 é diferemte de '1' seu tipo também é diferente
*/

// &&(and), ||(or), !(negação) comparadores lógicos de booleanos

$canAccess = true;
$isOlder = false;

// $result = $canAccess && $isOlder; // essa comparacao verifica se o segundo param é true para retornar true senao sera false.
// $result = $canAccess || $isOlder; // essa comparacao verifica se o segundo ou o primeiro param é true retornar true senao sera false.
// var_dump($result);

var_dump(!$isOlder); // essa opercao nega o valor vindo da variavel retornando o contrário do valor lógico
