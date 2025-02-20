<?php
// CONDICIONAL IF

/** ESTRUCTURA DEL CONDICIONAL
 * 
 * if(condicion){
 *      instrucciones
 * }else{
 *      instrucciones si no se cumple
 * }
 * 
 * // OPERADORES DE COMPARACIÓN
 * 
 * == Igual
 * === Idéntivo(Evalúa el mismo tipo de dato)
 * != Diferente
 * <> Diferente
 * !== No idéntico
 * < Menor que
 * > Mayor que
 * <= Menor o igual que
 * >= Mayor o igual que
 */

 $color = "rojo";

 if($color == "azul") {
    echo "El color es Azul";
 }else {
    echo "El color es diferente a Azul";
 }

 echo "<br>";

 $year = 2025;
 if($year === "2025") {
   echo "Este es el año actual";
 }else {
   echo "El año ingresado no es el actual";
 }

 // if anidado
 $edad = 16;
 $pais = "Colombia";
 $edad_min = 18;
 if($edad >= $edad_min) {
    echo "<h1>Eres mayor de edad</h1>";
    if($pais == "Colombia") {
      echo "<h2>Y eres colombiano, puedes pasar</h2>";
    }else {
      echo "Pero no eres colombiano, no puedes pasar";
    }
 }else {
    echo "<br>No eres mayor de edad";
 }

 // elseif
 $opcion = 4;
 echo "<br><hr>Elija una opción entre 1 - 4:<br>";

 if($opcion == 1) {
    echo "Es la opción 1";
 }elseif($opcion == 2) {
    echo "Es la opción 2";
 }elseif($opcion == 3) {
    echo "Es la opción 3";
 }elseif($opcion == 4) {
    echo "Es la opción 4";
 }else {
    echo "Su opción no es válida";
 }

 // USO DE OPERADORES LÓGICOS
 $name = "santiago";
 $password = 12346;

 echo "<hr/>";

if($name == "santiago" && $password == 123456) {
   echo "¡Puedes acceder!";
}else {
   echo "No tienes acceso";
}

?>