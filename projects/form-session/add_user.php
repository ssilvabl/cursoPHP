<?php
// FICHERO PARA REGISTRAR UN NUEVO USUARIO

// Incluir conexión a la DB
include_once '../crud/connection.php';

// Capturar los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


// consulta para validar si existe el usuario en la DB 
$sql_validate_user = 'SELECT * FROM users WHERE name = ?';
// Obtener la conexión a la DB y Preparar la consulta SQL
$conn_query_validate_user = $pdo->prepare($sql_validate_user);
// Establecer conexión a la DB y ejecutar sentencia SQL
$conn_query_validate_user->execute(array($username));
// Obtener array del resultado de la consulta SQL
$result = $conn_query_validate_user->fetch();

// Validar si existe en el resultado de la consulta SQL
if($result) {
    // Si existe el usuario, se termina la ejecución
    echo '<br/> Ejecución finalizada';
    die();

// Si no existe, sigue la ejecución del programa
}


// Cifrar contraseña de usuario
$password = password_hash($password, PASSWORD_DEFAULT);

// Verificar contraseña en texto plano contra hash
if(password_verify($confirm_password, $password)) {
    // Si es válida
    echo 'La contraseña es correcta <br/>';

    // Consulta SQL para añadir el usuario
    $sql_add_user = 'INSERT INTO users (name, password) VALUES (?, ?)';

    // Obtener la conexión con la DB y Preparar la sentencia SQL
    $conn_query_add_user = $pdo->prepare($sql_add_user);

    // Validar si se Ejecuta la conexión con la DB y la sentencia SQL con los placeholders
    if($conn_query_add_user->execute(array($username, $password))) {
        // Si se ejecuta el registro
        echo '¡El registro fue exitoso! <br/>';

    // Si no se realiza el registro
    }else {
        echo 'No se realizó el registro';
    }

    // Cerrar conexión con la DB
    $pdo = null;
    $conn_query_add_user = null;

    // Redirigir después del registro
    //header('location:index.php');
    
// Si no lo es
}else {
    echo 'La contraseña no es correcta';

    
}

