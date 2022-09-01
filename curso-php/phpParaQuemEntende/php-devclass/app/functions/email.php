<?php

function send(array $data)
{
    $email = new PHPMailer\PHPMailer\PHPMailer();
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'plain';
    $email->isSMTP();
    $email->Host = 'smtp.mailtrap.io';
    $email->Port = 2525;
    $email->SMTPAuth = true;
    $email->Username = '1039b161cfe0fb';
    $email->Password = '4a283590a4ad64';
    $email->isHTML(true);
    $email->setFrom('rodrigodev6@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody =
        'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML';
    $email->MsgHTML($data['mensagem']);

    return $email->send();
}