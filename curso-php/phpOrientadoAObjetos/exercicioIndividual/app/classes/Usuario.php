<?php

namespace app\classes;

class Usuario
{
    public $name;
    /**
     * Class constructor.
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}