<?php

// CONSTANTES

define('nombre', 'santiago');
define('edad','25');

// Imprimir una constante
echo nombre . '<br>';

// Constantes predefinidas
echo PHP_OS; // indica el sistema operativo en el que se está ejecutando PHP
echo PHP_VERSION; // Indica la versión de PHP que se está utilizando
echo PHP_EXTENSION_DIR; // Indica la ruta en la que están instaladas las extensiones de PHP
echo __LINE__; // Indica el número de la línea en la que se está sacando el valor
echo __FILE__; // Indica la ruta completa del archivo
echo __FUNCTION__; // indica el nombre la función que contiene esa instrucción

?>