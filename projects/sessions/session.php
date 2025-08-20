<?php
// FICHERO PARA CREAR LA SESIÓN DEL USUARIO

// Siempre que genere una página con inicio de sesión se debe tener la función
session_start();
$login = 'santiago';

// Asociar la constante se session
$_SESSION['admin'] = $login;

// Validar si existe la sesión
if(isset($_SESSION['admin'])) {
    // Si la session existe o no es nula
    header('Location:index.php');
}
