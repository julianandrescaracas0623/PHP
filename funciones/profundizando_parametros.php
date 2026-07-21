<?php

function suma($a , $b){

 echo "La suma de $a + $b es: " . $a + $b . "\n";

}


$numeros = [1,2];

suma(...$numeros);

echo "\n";


function suma_infinita(...$params){

 var_dump($params)

}


suma_infinita(1,2,3)