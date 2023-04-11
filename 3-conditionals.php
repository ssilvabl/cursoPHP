<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div style="background-color: blue;">
        <h1>Hola, mundo!</h1>
    </div>
    <div style="background-color: brown;">
        <?php
        
        // CONDICIONALES
        
        // Variables
        $hr = 24;

        // Validar hora para mostrar mensaje
        if($hr >= 6 && $hr < 12){
            echo "<h1>¡Hola, buenos días!</h1>";
        // Sino, valida esta opción
        }else if($hr >= 12 && $hr <= 18){
            echo "<h1>¡Hola, buenas tardes!</h1>";
        }else if($hr > 18 && $hr < 24 ){
            echo "<h1>¡Hola, buenas noches!</h1>";
        // De no funcionar con ninguna
        }else{
            echo "<h1>¡Hola, buenos días!</h1>";
        }
        
        ?>
    </div>
    
</body>
</html>