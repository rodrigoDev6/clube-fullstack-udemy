<?php
//switch pega o valor e executa uma operacao de acordo com ele

//exemplo:
$nome = 'rodrigo';

switch ($nome) {
    case 'rodrigo':
        echo 'Bem vindo ' . $nome;
        break;

    case 'joao':
        echo 'Bem vindo ' . $nome;
        break;

    default:
        //caso não seja nenhum dos acima
        echo 'sem nome';
        break;
}
