<?php


/*

La ventaja de este ciclo es que nos permite recorrer cualquier elemento que sea iterable,
sin tener que contar los elementos del mismo, el por si solo detecta cuantos elementos
tiene  dicho elemento.
*/


$fruits = [

 "banana" => 2000,
 "fresa" => 3500,
 "pera" => 4000, 

];

foreach($fruits as $price){

 echo"La fruta en cuestion cuesta  $" . $price. " COP \n";

}

echo"\n";

$fruits = [

    "banana" => 2000,
    "fresa" => 3500,
    "pera" => 4000,

];

foreach ($fruits as $name => $price) {

    echo "La fruta " . $name . " cuesta $" . $price . " COP\n";

}

echo "\n";