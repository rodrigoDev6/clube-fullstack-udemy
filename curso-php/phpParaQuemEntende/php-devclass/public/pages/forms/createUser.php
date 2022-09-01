<?php

require '../../../bootstrap.php';

if (isEmpty()) {
    flash('message', 'preencha todos os campos');
    return redirect('createUser');
}

$validate = validate([
    'name' => 's',
    'lastname' => 's',
    'email' => 'e',
    'password' => 's',
]);

$cadastrado = create('users', $validate);
// dd($cadastro);

if ($cadastrado) {
    flash('message', ' Usuário cadastrado com sucesso', 'success');

    return redirect('createUser');
}

flash('message', 'erro no cadastro do usuario');
redirect('createUser');