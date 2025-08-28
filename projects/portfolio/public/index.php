<?php
// FICHERO INICIAL CON PATRON FRONT CONTROLLER (Es un único punto de acceso para las peticiones)

// Recuperar las Rutas (Obtener el array)
$routes = require __DIR__ . '/../routes/web.php';

// Obtener la URI del recurso que solicita desde el index
$request_uri = basename($_SERVER['REQUEST_URI']);
// Convertir URI a /
if($request_uri == 'portfolio') {
    $request_uri = '/';
}
echo $request_uri;
// Guardar la URI en caso tal de que exista en las rutas, de lo contrario almacena null
$route = $routes[$request_uri] ?? null;
//echo $route;
// Validar si URI existe en la rutas
if($route) {
    // Si existe en las rutas
    // Recupera el controlador con la vista
    require __DIR__ . '/../' . $route;

}else {
    // Si no existe / es null
    // Mostrar error y finalizar el script
    exit('No encontrado 404');
}