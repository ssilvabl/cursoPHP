<?php
// EDITAR TAREA

// Capturar los datos a través de la URL
$id = $_GET['id']; // id
$title = $_GET['title']; // title
$description = $_GET['description']; // description

// Incluir conexión con la DB
include_once 'connection.php';

// Query para editar tarea
$sql_edit = 'UPDATE tasks SET title = ?, description = ? WHERE id = ?';
// Obtener conexión a la DB y preparar sentencia SQL
$conn_query_edit = $pdo->prepare($sql_edit);
// Ejecutar la conexión a la DB y la consulta SQL
$conn_query_edit->execute(array($title, $description, $id));

// Cerrar conexión con la DB
$pdo = null;
$conn_query_edit = null;

// Redireccionar al index una vez se ha enviado el formulario
header('location:index.php');