<?php

// Inlcuir conexión a la DB
include_once 'connection.php';

// Capturar el ID por medio de la URL
$id = $_GET['id'];

// Sentencia SQL
$sql_delete = 'DELETE FROM tasks WHERE id = ?';
// Obtener la conexión con la DB y preparar la sentencia SQL
$conn_query_delete = $pdo->prepare($sql_delete);
// Ejecutar la conexión con la DB y la consulta SQL
$conn_query_delete->execute(array($id));

// Cerrar la conexión con la DB
$pdo = null;
$conn_query_delete = null;

// Redireccionar al index
header('location:index.php');

?>