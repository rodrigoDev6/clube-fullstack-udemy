<?php

// global é todo o arquivo
// local é quando dentro de uma funcao

$name = 'rodrigo'; // essa e uma var global
$age = 21;

function user()
{
    //o echo retornara vazio porque a var nao existe no escopo local
    // echo $name;

    // acessando variaveis globais com global e $GLOBALS

    global $name;
    echo 'nome: ' . $name . "\n";
    echo 'idade: ' . $GLOBALS['age'];
}

echo user();