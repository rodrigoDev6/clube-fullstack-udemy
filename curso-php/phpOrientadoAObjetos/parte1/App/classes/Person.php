<?php

// define('TESTE','testandoss');

class Person 
{
    public $name;
    public $age;
    public $phone;

    public function getDataPerson(){
        return "Meu Nome é {$this->name}, minha idade é {$this->age} e meu número é {$this->phone}.";
    }
}


?>