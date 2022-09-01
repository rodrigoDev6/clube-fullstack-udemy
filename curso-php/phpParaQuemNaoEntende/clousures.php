<?php

//clousures são funções anonimas(ou seja sem um nomes)
$person = function () {
    return 'closure';
};

//para retornar a execuco de uma closure é preciso passar parentese () depois do nome da var com a function
// var_dump($person());

//usando closure dentro de uma funçaõ

// defindo tipo das variaveis de parametro para funcao getClient

function getClient(string $clientName, int $clientAge, bool $clientActive)
{
    //para passar o valor var na function para clouse usamos o 'use'
    $data = function () use ($clientName, $clientAge, $clientActive) {
        if ($clientActive === true) {
            return "\nO cliente {$clientName} tem {$clientAge} anos. Rodrigo está ativo no sistema";
        } else {
            return "\nO cliente {$clientName} tem {$clientAge} anos. Rodrigo não está ativo no sistema";
        }

        return;
    };

    //aqui executa a funcao closure
    return $data;
}

var_dump(getClient('Rodrigo', 20, true)());