<?php

// (int), (integer) - molde para inteiro
// (bool), (boolean) - converte para booleano
// (float), (double), (real) - converte para número de ponto flutuante
// (string) - converte para string
// (array) - converte para array
// (object) - converte para objeto
// (unset) - converte para NULL

// A conversão de tipos no PHP funciona como no C: o nome de um tipo desejado é escrito entre parênteses antes da variável que se deseja converter.

//exemplos
$name = 'rodrigo';
$changeName = (bool) $name;
var_dump($changeName);

$number = 3;
$changeNumber = "{$number}"; //transforma em string usando aspas
$changeNumber2 = (string) $number; //transforma em string usando o parenteses (string)

var_dump($changeNumber);
var_dump($changeNumber2);

$person = ['name' => 'rodrigo', 'age' => 21];
$changePerson = (object) $person; //tranforma meu array em um objeto

var_dump($changePerson->name); //chamando objeto e um indice especifivo com uma seta simples '->' mais o name do indice

?>