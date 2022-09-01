<?php

require '../../../bootstrap.php';

if (isEmpty()) {
    flash('message', 'preencha todos os campos');
    return redirect('contato');
}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's',
]);

$data = [
    'quem' => $validate->name,
    'para' => 'rodrigolima.alves21@gmail.com',
    'assunto' => $validate->subject,
    'mensagem' => $validate->message,
];

if (send($data)) {
    flash('message', 'E-mail enviado com sucesso', 'success');
    return redirect('contato');
}