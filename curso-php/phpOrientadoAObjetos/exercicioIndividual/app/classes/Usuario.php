<?php

namespace app\classes;

class Usuario
{
    private $nome;
    private $telefone;
    private $data_cadastro;

    public function preencherDados($nome, $telefone, $nivel)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->nivel = $nivel;
        $this->data_cadastro = date('d/m/Y H:i:s');
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }

    function cadastrar()
    {
        return '<br> <br>Usuario casastrado';
    }
}