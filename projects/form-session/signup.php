<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registrarse en la aplicación</h1>
    <form action="add_user.php" method="POST">
        <input type="text" name="username" placeholder="Nombre de Usuario">
        <input type="text" name="password" placeholder="Contraseña">
        <input type="text" name="confirm_password" placeholder="Confirmar Contraseña">
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>