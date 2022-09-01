<?php

//callbacks são funcoes passadas como parametros para outras funcoes

function name($name)
{
    return 'Olá ' . $name;
}

// function printName($callback)
// {
//     return $callback('Rodrigo');
// }

function printName($callback)
{
    //verifica se é um callback
    if (is_callable($callback)) {
        return 'é um callback';
    } else {
        return 'não é callback';
    }
}

// echo printName('rodrigo');

// echo printName('name');

//calbacks com call_user_func e call_user_func_array

class User
{
    public function data($name)
    {
        return 'Olá ' . $name;
    }
}

$user = new user();
//passando parametro em callback dentro de uyma classe
echo call_user_func([$user, 'data'], 'rodrigo');

?>