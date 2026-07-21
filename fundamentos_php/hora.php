<?php

//Ingresamos los datos desde el front

$horas = readline("Ingresa tus horas: ");
$minutos = readline("Ingresa tus minutos: ");
$segundos = readline("Ingresa tus segundos: ");

// Definimos las constantes en segundos y minutos

define("SEGUNDOS_HORA", 3600);
define("MINUTOS_HORA", 60);

// Calculamos cuantos segundos son las horas y minutos introducidos

$horas = $horas * SEGUNDOS_HORA;
$minutos = $minutos * MINUTOS_HORA;

//Sumamos los segundos para definir una variable que nos de el total

$total = $horas+$minutos+$segundos;


