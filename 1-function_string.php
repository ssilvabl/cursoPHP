<?php

// FUNCIONES PARA STRINGs

// Variables
$name = "   Santiago      Silva";

// Obtener longitud de caracteres
echo strlen($name).'<br>';

// Obtener el número de palabras
echo str_word_count($name).'<br>';

// Reversa del texto
echo strrev($name).'<br>';

// Encontrar texto (devuelve el índice de donde comienza la palabra)
echo strpos($name, "Santiago").'<br>';

// Reemplazar texto (el que busca, con el que reemplaza, variable en donde se realiza el proceso)
echo str_replace("Silva", "Blandón", $name).'<br>';

// Convertir todo en minúsculas
echo strtolower($name).'<br>';

// Convertir todo en mayúsculas
echo strtoupper($name).'<br>';

// Comparar cadenas (0 = iguales)
echo strcmp("a", "a").'<br>';

// Substraer cadena (variable de donde se extrae, índice de posición desde la cuál se extrae, número de caracteres a extraer)
echo substr($name, 4, 4).'<br>';

// Remover espacios en blanco innecesarios
echo trim($name)


?>