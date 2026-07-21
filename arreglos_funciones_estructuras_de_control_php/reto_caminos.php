<?php

/*

De cuentas formas puedo ir de la tienda 1 a la tienda n sin retroceder en el camino?
es decir, yendo siempre de izquierda a derecha.

*/


$caminos = (int) readline("Ingresa un camino: ");

if ($caminos <= 0) {

    echo "Camino no válido";
    exit;

}
else if ($caminos == 1 || $caminos == 2) {

    echo "Tiene una sola forma de llegada\n";
    exit;

}


$a = 1; //camino 1
$b = 1; //camino 1

for ($i = 3; $i <= $caminos; $i++) {

    $c = $a + $b;
    $a = $b;
    $b = $c;

}

echo "El camino $caminos tiene $b formas de llegada\n";

echo"\n";



/* switch($caminos){

 case 1:
    echo "El camino numero 1 es donde estas en estos momentos";
    break;

case 2:
    echo "el camino numero 2 tiene tiene 1 forma de llegada";
    break;

case 3:
   echo "el camino numero 3 tiene 2 formas de llegada";
   break;

case 4:
   echo "el camino numero 4 tiene 3 formas de llegada";
   break; 

case 5:
   echo "el camino numero 5 tiene 5 formas de llegada";
   break;

default:
   echo "Ese camino no existe";
 
};

*/







