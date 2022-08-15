<?php

//isset e uma funcao que permite verificar se a variavel existe
$age = 20;
// retorna 1 se exitir e vazio se não existir
echo isset($age) . "\n";

// verifco se a var name existe e retorno algo usando isset
$name = 'rodrigo';
if (isset($name)) {
    echo 'name existe';

    return;
} else {
    echo 'não existe';

    return;
}
?>