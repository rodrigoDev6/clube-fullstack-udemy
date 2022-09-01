<?php

namespace app\classes;

class Cars
{
    public $name;
    public $brand;
    public $year;

    function __construct($name, $brand, $year)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->year = $year;
    }

    function getDataCar()
    {
        echo 'Nome: ' . $this->name . '<br>';
        echo 'Marca: ' . $this->brand . '<br>';
        echo 'Ano: ' . $this->year . '<br>';
    }
}