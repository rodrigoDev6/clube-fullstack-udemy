<?php

require '../../../bootstrap.php';

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'message' => 's',
]);

// dd($validate->message);

echo "{$validate->name} <br>";
echo "{$validate->email} <br>";
echo "{$validate->message} <br>";