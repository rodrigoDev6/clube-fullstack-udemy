<?php

//post pega e exibe os dados
// var_dump($_GET['name']); //exemplo de syntax do header para get: http://localhost:5000/?id=40&name=rodrigo&age=21

//pegando dados de um formulario
// $nome = $_POST['name'];
// $age = $_POST['age'];
// echo 'Nome: ' . $nome . ', Idade: ' . $age;

//verificando e validadando dados com sanitizadores:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //FILTRANDO DADOS PARA EVITAR POSSIVEIS ENVIOS MALICIOSOS
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    //verificando com filter_var se o email é valido
    echo filter_var($email, FILTER_VALIDATE_EMAIL)
        ? "Nome: {$name} <br> E-mail: {$email}"
        : 'E-MAIL NÃO É VALIDO <br>';

    return;
}

?>