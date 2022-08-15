<?php

//um cookie é uma memoria temporaria criado no sistema para ser reutilizado.
// a variavel global $_COOKIE guarda todos os cookies no php para chamar um basta
// colocar a seguimte syntax $_COOKIE['nomeDoCookie'].

//criando um cookie com a funcao setcookie
setcookie('curso', 'PHP full-stack', strtotime('-1days'));

//guardando o cookie em uma variavel
$cursoCookie = $_COOKIE['cursos'];

//
// echo $cursoCookie;

//verificando se cookie existe
if (isset($cursoCookie)) {
    echo $cursoCookie;
} else {
    echo 'cookie não existe';
}