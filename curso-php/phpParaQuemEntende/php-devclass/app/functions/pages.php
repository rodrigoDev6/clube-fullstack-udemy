<?php

function load()
{
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $page = !$page ? 'pages/home.php' : "pages/{$page}.php";

    if (!file_exists($page)) {
        throw new \Exception('Erro 404 página não existe');
    }

    return $page;
}