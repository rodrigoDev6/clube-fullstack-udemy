<?php

// Os tipos de numeros são int, double

$number1 = 32; //int
$number2 = 45.49; //double

// strings que tenha numeros(int e double) sem caracteres são consideradas do tipo number
$number3 = '43.1';
// echo $number1 + $number3;

// virificar o tipo numerico
if (is_numeric($number3) && is_numeric($number1)) {
    // echo 'ok';
} else {
    // echo 'error';
}

// echo floor($number2) . ' || ';//arredonda para baixo

// echo ceil($number3);//arredonda para cima

// echo round($number2); //arredondar inteligentemente