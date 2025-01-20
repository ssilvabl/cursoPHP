<?php
// Archivo: create_user.php

// Conectar a la base de datos
$servername = "localhost";
$username = "root"; // Cambia esto si tu usuario de MySQL es diferente
$password = ""; // Cambia esto si tu contraseña de MySQL es diferente
$dbname = "login_system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Encriptar la contraseña
$hashed_password = password_hash("password", PASSWORD_DEFAULT);

// Insertar un nuevo usuario
$sql = "INSERT INTO users (username, password) VALUES ('admin@admin.com', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo usuario creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
