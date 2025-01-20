<?php

// OPERADORES ARITMÉTICOS

$num1 = 23;
$num2 = 44;

// suma
echo 'la suma es: ' . $num1 + $num2 . '<br>';

// resta
echo 'la resta es: ' . $num1 - $num2 . '<br>';

// multiplicacíon
echo 'la multiplicación es: ' . $num1 * $num2 . '<br>';

// división
echo 'la división es: ' . $num1 / $num2 . '<br>';

// módulo - resto
echo 'el resto es: ' . $num1 % $num2 . '<br>';


// OPERADORES INCREMENTO Y DECREMENTO

$year = 2020;

// incremento
$year++;

// pre-incremento
++$year;

// decremento
$year--;

// pre-decremento
--$year;

echo $year;


// OPERADORES DE ASIGNACIÓN

// Asignar valores
$edad = 25;

// sumar valor a una variable(se puede realizar con cualquier operador aritmético)
echo '<br>' . $edad+=5;

?>