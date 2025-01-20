<?php
// ARCHIVO DE INICIO DE SESIÓN

// #CONEXIÓN A LA BASE DE DATOS#

// Dirección del servidor de la DB
$servername = 'localhost';
// Nombre de usuario de la DB
$username = 'root';
// Contraseña de la DB
$password_db = '';
// Nombre de la DB a la que nos vamos a conectar
$db_name = 'login_system';


// Crear una nueva conexión a MySQL utilizando el objeto mysqli
$conn = new mysqli($servername, $username, $password_db, $db_name); // Dirección del servidor, nombre usuario, contraseña y nombre de la db a conectarse

// Verificar la conexión
if ($conn -> connect_error){
    die("Conexión fallida: " . $conn -> connect_error); // Si hay un error en la conexión se muestra y detiene la ejecución
}


// #PROCESAR EL INICIO DE SESIÓN#

// Obtener datos del formulario
$user = $_POST['username']; // Obtiene el valor del campo con name 'username' en el formulario enviado por POST
$pass = $_POST['password']; // Obtiene el valor del campo con name 'password' en el formulario enviado por POST

// Consultar el usuario en la base de datos
$sql = "SELECT * FROM users WHERE username = ?"; // Consulta SQL para seleccionar el usuario basado en el nombre de usuario

// Preparar la consulta SQL para evitar inyecciones SLQ
$stmt = $conn -> prepare($sql);
$stmt -> bind_param("s", $user); // 's' Indica que es una cadena(string). El parámetro ? en la consulta SQL se asocia con la variable $user
$stmt -> execute(); // Ejecuta la consulta
$result = $stmt -> get_result(); // Obtiene el resultado de la consulta

// Verificar si se encontraron resultados
if ($result -> num_rows === 1){ // Verifica si se encontró una fila con el nombre de usuario proporcionado
    $row = $result -> fetch_assoc(); // Obtiene los datos del usuario como un array asociativo. La calve del array es el nombre de la columna en la db

    // Verificar la contraseña
    if (password_verify($pass, $row['password'])){ // Verifica la contraseña usando la función password_verify
        echo 'Inicio de sesión exitoso!'; // Mensaje de éxito
    }else {
        echo 'Nombre de usuario o contraseña inconrrectos'; // Mensaje de error si la contraseña no es correcta
    }
}else {
    echo 'Nombre de usuario o contraseña incorrectos'; // Mensaje de error si no se encontró el usuario
}

$stmt -> close(); // Cierra la declaración preparada (consulta SQL)
$conn -> close(); // Cierra la conexión a la base de datos


?>