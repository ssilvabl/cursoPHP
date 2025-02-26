<?php

// EJERCICIO
// Recoger 2 números por medio de la URL utilizando el método GET, y hacer las operaciones básicas
// de una calculadora con esos 2 números.



// Validar si existe la variable como parámetro
if(isset($_GET['num1']) && isset($_GET['num2'])) {
    // Almacenar el valor del parámetro por GET
    $num1 = (int)$_GET['num1'];
    $num2 = (int)$_GET['num2'];
}else{
    echo "El parámetro que ingresa no es válido.";
    $num1 = 2;
    $num2 = 3;
}


echo "<br/>La suma del número $num1 + $num2 es: ".($num1 + $num2);
echo "<br/>La resta del número $num1 - $num2 es: ".($num1 - $num2);
echo "<br/>La multiplicación del número $num1 * $num2 es: ".($num1 * $num2);
echo "<br/>La división del número $num1 / $num2 es: ".($num1 / $num2);


?>