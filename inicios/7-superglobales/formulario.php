<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en PHP</title>
</head>
<body>
    <h1>Primer formulario en PHP</h1>
    <hr>
    <!--formulario con método GET de HTTP y que se envían los datos al archivo recibir.php-->
    <!-- <form method="GET" action="recibir.php"> -->
    <form method="POST" action="recibir.php"> 
        <label for="username">Nombre</label>
        <input type="text" name="username">
        <br>
        <label for="password">Contraseña</label>
        <input type="password" name="password">
        <br>
        <!--Enviar datos a la página de action-->
        <input type="submit">
    </form>
    <hr>

</body>
</html>