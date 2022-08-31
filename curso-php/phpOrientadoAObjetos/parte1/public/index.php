<?php

require "../vendor/autoload.php";

$person = new Person();
$person->name = 'Rodrigo';
$person->age = 21;
$person->phone = '(21) 9 9999-9999';

echo $person->getDataPerson();
?>