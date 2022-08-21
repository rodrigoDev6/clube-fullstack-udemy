<?php

require '../../../bootstrap.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

if (isEmpty()) {
    flash('message', 'Preencha todos os campos');

    return redirect('editUser&id=' . $id);
}

$validate = validate([
    'name' => 's',
    'lastname' => 's',
    'email' => 'e',
]);

$atualizado = update('users', $validate, ['id', $id]);

if ($atualizado) {
    flash('message', 'Atualizado com sucesso', 'success');

    return redirectToHome();
}

flash('message', 'Erro ao atualizar');
redirect('editUser&id=' . $id);