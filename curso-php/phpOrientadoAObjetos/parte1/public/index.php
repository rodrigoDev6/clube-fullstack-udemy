<?php
require '../vendor/autoload.php';

use app\classes\Car;
use app\classes\Person;
use app\classes\Upload;
use app\classes\UploadImages;


echo 'Classe Person:<br>';

$person = new Person();
$person->name = 'Rodrigo';
$person->age = 21;
$person->phone = '(21) 9 9999-9999';
echo $person->getDataPerson();

echo '<br>===================== <br>';
echo 'Classe UploadImages: <br>';

$upload = new UploadImages('test.jpg');
echo 'extensão do arquivo .' . $upload->newName . '<br>';
// $upload->rename();
echo "o arquivo {$upload->file} foi renomeado para {$upload->upload()}";

echo '<br>===================== <br>';
echo 'Método contrutor com a Classe Car: <br>';

$car = new Car('Lamborghini Huracan', 'Lamborghini', '2014');
echo $car->getDataCar();

echo '<br>===================== <br>';
echo 'Herança de classes com Classe: <br>';
?>