<?php

// Los comentarios de una sola línea se realizan con // . Y los de línea múltiple con /** */

// VARIABLES (siempre se definen utilizando el signo $ antes del nombre)
$variable = 1;
$variable2 = 2;

// TIPOS DE VARIABLES

// Caracter
$tipo_caracter = "s";

// Cadena
$tipo_cadena ="santiago";

// Entero
$tipo_entero = 23;

// Flotante
$tipo_flotante = 2.3;

// Booleano
$tipo_boolean = true;

// Arreglo
$tipo_arreglo = array("Hola", "como", "santiago");

// Nulos
$tipo_nulo = null;


// Imprimir en consola
print "hola";
echo "Hola, mundo!" . $variable;
echo "Esta es una variable $variable2" . "<br>";
print_r ($tipo_arreglo); // Imprimir erreglo

?>