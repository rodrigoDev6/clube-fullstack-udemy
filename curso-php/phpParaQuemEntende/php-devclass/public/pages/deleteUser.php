<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$remove = delete('users', 'id', $id);

if ($remove) {
    return redirectToHome();
}

flash('message', 'erro ao exluir o usuario');
redirectToHome();