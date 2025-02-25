<?php

// BUCLE WHILE
// Es una estructura de control que itera un conjunto de instrucciones si se cumple una condición
/*
$num = 0;
while($num <= 100) {
    // Mostrar número actual
    echo "<h3>$num</h3>";
    // Aunmentar la variable en cada ciclo
    $num = $num + 2;
}
*/


// la funcióm isset(variable) valida si la variable existe y es diferente a null, de lo contrario retornará false
if(isset($_GET['num'])) {
    // Se almacena en la variable numero el valor del método GET
    // Se puede hacer casting para cambiar el tipo de dato de la variable
    $numero = (int)$_GET['num'];
}else {
    $numero = 1;
}

// Mostrar el título
echo "<h1>Esta es la tabla de multiplicar del número $numero<h1/>";

$multiplicador = 1;

while($multiplicador <= 10) {
    // Mostrar tabla de multiplicar
    echo "$numero x $multiplicador = ".($numero*$multiplicador)."<br/>";
    // Aumentar multiplicador
    $multiplicador ++;
}

// Mostrar los detalles sobre una variable, útil para depurar el código
var_dump($numero);


// BUCLE DO WHILE
// Sirve para ejecutar el código del bucle por lo menos una vez, ya que la condición se evalúa a lo último

$edad = 18;
$contador = 1;
do{
    echo "Puedes ingresar por haber llegado de primero <br/>";
    $contador ++;
}while($edad >= 18 && $contador <= 5);

?>