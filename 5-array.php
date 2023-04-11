<?php

// Arreglos

// Arreglo de frutas
$frutas = array("manzana", "banano", "pera");

// Imprimir datos
print_r($frutas);

// Imprimir un elemento pasando el índice
echo $frutas[1].'<br>';

// Contar el número de elementos en un array
echo count($frutas).'<br>';

// Recorrer elementos del array
for($i = 0; $i < count($frutas); $i++){
    echo $frutas[$i].'<br>';
}

// Craer arrays con clave - valor
$nombres = array("santiago" => 23,
                "valentina" => 20,
                "diana" => 44);

// Imprimir elemento pasando la clave
echo $nombres["diana"];

// Recorrer arreglo con bucle foreach
// Uso: arreglo a recorrer, variable iterador de claves, variable con valor de la clave
foreach($nombres as $key => $value){
    echo $key . ' tiene la edad de: ' . $value . '<br>';
}


?>