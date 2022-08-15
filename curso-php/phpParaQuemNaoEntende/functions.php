<?php

//funcoes sao formas de aproveitar codigo

//declaracao e exemplo

function connection()
{
    $pdo = new PDO('mysql:host=localhost;dbname=sbpf', 'root', 'root');
    return $pdo;
}
// chamando funcao connection();

function getData($table, $id_state)
{
    $connection = connection();
    $query = $connection->query(
        "select * from {$table} where id = {$id_state}"
    );
    $query->execute();
    return $query->fetchAll();
}

// var_dump(getData('estado', 1));

$data = getData('estado', 1);
$state = (object) $data;
// var_dump($state);

//acesaar arrays dentro de arrays em um obejto
$stateSpecify = $state->{'0'};

var_dump($stateSpecify);