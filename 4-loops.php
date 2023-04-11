<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
</head>
<body>

    <div>
        <?php
        
        // CICLO FOR
        // Uso: variable a inicializar, condición, iteración(incremento, decremento, etc)

        /*
        // Iterar imagen con la función echo
        for($i = 0; $i < 10; $i++){
            echo '<img src="" alt="imagen"><br>';
        }
        
        // Iterar imagen sin funciones
        for($i = 0; $i < 10; $i++){

        ?>
        <img src="" alt="imagen">
        <br>
        <?php
        }
        */

        // CICLO WHILE
        // Uso: condición(mientras se cumpla se ejecuta el código)

        // Generar números aleatorios
        while(rand(1, 10) != 8){

        ?>
        <img src="" alt="Imagen genérica">
        <?php
        }
        ?>

    </div>
    
</body>
</html>