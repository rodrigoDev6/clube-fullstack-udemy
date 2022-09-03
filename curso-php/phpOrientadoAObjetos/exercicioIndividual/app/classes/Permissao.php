<?php

namespace app\classes;

class Permissao
{
    protected $nivel;

    protected function setNivel($nivel)
    {
        if (is_null($nivel)) {
            throw new \Exception('O nível não pode ser nulo', 2);
        }

        return $this->nivel = $nivel;
    }

    public function getNivel()
    {
        return $this->nivel;
    }
}