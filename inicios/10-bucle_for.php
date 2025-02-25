<?php

// BUCLE FOR
// Estructura: for(Expresión inicial, condición, incremento del contador){}

/*
for($i = 0; $i <= 10; $i++) {
    echo "El contador va en: $i <br/>";
}
*/

// El break sirve para salir de un bucle
for($i = 1; $i <= 100; $i++) {
    if($i >= 20) {
        echo "El número es demasiado grande";
        break;
    }
    echo "El contador va en: $i <br/>";
}

?>