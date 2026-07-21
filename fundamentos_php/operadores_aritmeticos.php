<?php


$resultado = 5 - 3;
echo $resultado;

echo (5 * 6) . "". (8/9);

echo"\n";

// El Operador Módulo 
var_dump(5 % 3);
var_dump(5 % -3);
var_dump(-5 % 3);
var_dump(-5 % -3);

$totalSegundos = 3700;

$horas = intdiv($totalSegundos, 3600); // 1 hora
$minutos = intdiv($totalSegundos % 3600, 60); // 1 minuto
$segundos = ($totalSegundos % 3600) % 60; // 40 segundos

// Imprime: 3700 segundos equivalen a: 1 hora(s) y 1 minuto(s)
echo "$totalSegundos segundos equivalen a: $horas hora(s) y $minutos minuto(s)" . PHP_EOL;
// Imprime: Sobran 40 segundos
echo "Sobran $segundos segundos";