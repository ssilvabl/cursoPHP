<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Imprimir en PHP</h1>

    <!-- sintaxis abreviada de echo-->
    <?='echo abreviado'?>

    <?php
        // Nota: Las comillas simples se utilizan para imprimir el texto literal. Y las dobles para poder utilizar caracteres especiales o variables
        // imprimir
        echo '<h2>Listado de Películas</h2>';

        // comentarios de una línea
        /*comentarios
         multilínea
        */

        // concatenar -> .
        echo "<ul>" 
            . "<li>Black</li>"
            . "<li>Iron Man</li>"
            . "<li>Thor</li>"
            . "</ul>";
    ?>
</body>
</html>