<?php

// OPERADORES

// Variables
$x = 23;
$y = 4;
$name = "2";
$name2 = 2;
$num1 = 2;
$num2 = 3;

// Aritméticos
echo ($x + $y).'<br>';
echo ($x - $y).'<br>';
echo ($x * $y).'<br>';
echo ($x / $y).'<br>';
echo ($x % $y).'<br>';
echo ($x ** $y).'<br>';


// Asignación
echo ($x += $y).'<br>'; // Suma
echo ($x -= $y).'<br>'; // Resta
echo ($x *= $y).'<br>'; // Multiplicación


// Comparación
// Función para obtener el output de una expresión
var_dump($name == $name); // Validar si son iguales en sus valores
var_dump($name === $name); // Validar si son iguales en sus valores y en su tipo de variable
var_dump($name > $name); // Validar si es mayor
var_dump($name < $name); // Validar si es menor
var_dump($name <= $name); // Validar si es menor o igual
var_dump($name >= $name); // Validar si es mayor o igual
var_dump($name <> $name); // Validar si son diferentes (se utiliza sólo en php)
var_dump($name != $name2); // Validar si son diferentes sin importar su tipo de dato (se utiliza en otros lenguajes)
var_dump($name !== $name2); // Validar si son identicamente diferentes en su valor y tipo


// Incremento y decremento
echo $num1++; // Incrementar en la siguiente línea
echo $num1;

echo ++$num1; // Incrementar en la misma línea

echo $num1--; // Decremento en la siguiente línea
echo $num1;

echo --$num1; // Decremento en la misma línea


?>