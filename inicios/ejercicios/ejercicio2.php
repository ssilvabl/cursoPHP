<?php

// EJERCICIO
// Crear un script que permita obtener el valor cuadrado de los primero 40 números naturales
// utilizando el ciclo while.

// Contador
$i = 1;
// Resultado
$result = 0;

while($i <= 40) {
    $result = $i * $i;
    echo "El valor al cuadrado de $i es $result <br/>";
    $i++;
}

?>