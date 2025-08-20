<?php
// FICHERO PARA CERRAR LA SESIÓN DEL USUARIO

// Inicializar la sesión
session_start();

// Destruir todas las variables de la sesión (Se deja vacío)
$_SESSION = array();

// Eliminar por completo la cookie de la sesión
// Obtener la cookie de la sesión que se está usando
if(ini_get("session.use_cookies")) {
    // Obtener los parámetros de la cookie de sesión
    $params = session_get_cookie_params();
    // Eliminar la cookie del usuario poniendo el nombre en campo vacío e indicando un tiempo pasado
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destruir la sesión
session_destroy();

// Redirigir al home
header('Location:index.php');
