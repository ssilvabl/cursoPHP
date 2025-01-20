<?php

// VARIABLES SUPERGLOBALES

// Variables de servidor

// Obtiene la dirección IP del servidor
echo '<h1>';
echo $_SERVER['SERVER_ADDR'];
echo '<br>';
echo '</h1>';

// Obtiene el nombre del servidor (dominio)
echo $_SERVER['SERVER_NAME'];
echo '<br>';

// Obtiene el software que se está utilizando para el servidor
echo $_SERVER['SERVER_SOFTWARE'];
echo '<br>';

// Obtiene la información del navegador web desde el que está accediendo a la página
echo $_SERVER['HTTP_USER_AGENT'];
echo '<br>';

// Obtiene la dirección IP del cliente
echo $_SERVER['REMOTE_ADDR'];

?>