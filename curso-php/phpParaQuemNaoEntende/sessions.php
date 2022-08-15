<?php

session_start(); //inicia a sessao no navegador
session_regenerate_id(); //modifica o valor do id da sessao sempre que ela for recarregada

// session_destroy(); //destroi as sessoes do sistema

$_SESSION['user'] = 'Rodrigo'; //define o nome da sessao e o valor da sessao.

$userSes = $_SESSION['user'];

echo isset($userSes) ? "A session {$userSes} existe" : 'sessao não existe';