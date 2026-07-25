<?php

function suma($a = 1, $b = 1)
{
    echo "La suma de $a + $b es: " . ($a + $b) . "\n";
}

suma(1, 2);
suma(1, 9);


echo "\n";

$arreglo1 = [1,2,3];
$arreglo2 = [4,5,6];

$resultado = [...$arreglo1, ...$arreglo2];

var_dump($resultado);
print_r($resultado);


echo "\n";