<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en PHP</title>
</head>
<body>

    <h1>Manejo de Sesiones con PHP</h1>
    <h2>Bienvenido, <?php echo isset($_SESSION['admin']) ? $_SESSION['admin'] : 'Invitado' ?></h2>
    <a href="session.php">Iniciar sesión</a>
    <a href="protected.php">Contenido protegido</a>
    
</body>
</html>