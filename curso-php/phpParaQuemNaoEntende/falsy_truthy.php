<?php

//falsy são valores que não são booleans mas se compartam como false
/*
null    // null
0       //integer
0.0     //float
"0"     // string
""      // string vazia
array() //array vazio
*/
// truthy é todo o resto dos valores

$n = '1';

var_dump($n == true);
