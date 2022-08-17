<?php

function load()
{
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $page = !$page ? "pages/home.php" : "pages/{$page}.php";
    
    if (!file_exists($page)) {
        echo throw new \Exception('Deu errado o carregamento da pagina');
    }

    return $page;
}