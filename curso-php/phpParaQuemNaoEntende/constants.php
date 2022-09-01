<?php

// variaveis contantes são aquelas que recebem um valor com todas,
// porém o seu nome está reservado somene a delcaracao unica

// declaraco de contantes no php
define('AGE', 18);
/*echo AGE;*/

// o php vem com algumas contantes pré definidas em seu core

// saber se uma constante foi definda
if (defined('AGES')) {
    echo 'true';
} else {
    echo 'false';
}

?>