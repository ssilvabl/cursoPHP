<?php

// RECIBIR DATOS DEL FORMULARIO HTML CON MÉTODO GET Y POST

// Variable superglobal para recibir datos por método GET
// Se indica el nombre del parámetro que se desea recibir
/*
$username = $_GET['username']; 
$pass = $_GET['password'];

// Mostrar datos del formulario GET
echo 'El nombre de usuario es: ' . $username . ' y su contraseña es: ' . $pass;*/

// Variable superglobal para recibir datos por método POST (no se muestran en la URL)
// Se indica el nombre del parámetro que se desea recibir
$username = $_POST['username']; 
$pass = $_POST['password'];

// Mostrar datos del formulario POST
echo 'El nombre de usuario es: ' . $username . ' y su contraseña es: ' . $pass;

?>