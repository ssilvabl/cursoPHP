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

?>