<?php
// ARCHIVO DE LA CONEXIÓN CON LA DB

// Conexión a la base de datos
$host = 'mysql:host=localhost;dbname=tasks';
$user = 'root';
$pass = '';

// Intentar hacer la conexión
try {
    // Realizar conexión con la DB
    $pdo = new PDO($host, $user, $pass);

    echo 'Conectado a la DB';

// Si no se logra realizar la conexión a la DB se muestra el error
}catch (PDOException $e) {
    // Imprimir el error que se produjo
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>