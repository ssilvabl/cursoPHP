<?php
// FICHERO DE LA VISTA PROTEGIDA DEL USUARIO

// Función principal para trabajar con el inicio de sesión
session_start();

// Validar si existe la sesión
if(isset($_SESSION['admin'])) {
    // Si existe
    echo 'Bienvenido, ' . $_SESSION['admin'];
    // Mostrar botón de cerrar sesión
    echo '<br/><a href="logout.php">Cerrar sesión<a/>';

    // Si no existe
}else{
    header('Location:index.php');
}