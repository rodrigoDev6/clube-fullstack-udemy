<?php

namespace app\classes;

class Usuario
{
    private $nome;
    private $telefone;
    private $data_cadastro;

    public function preencherDados($nome, $telefone)
    {
        if (!filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS)) {
            throw new \Exception('O nome não deve ter caracter special', 1);
        }
        if (!filter_var($telefone, FILTER_VALIDATE_INT)) {
            throw new \Exception('O telefone deve ser número', 2);
        }

        $this->nome = $nome;
        $this->telefone = $telefone;
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
        return '<br> Usuario casastrado<br>';
    }
}