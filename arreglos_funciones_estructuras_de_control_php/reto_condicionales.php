<?php

/*
para este reto tendremos que pedirle a el streamer que nos diga cuanto dinero tiene o cuanto le han donado y debemos tomar la decision de si lo dejamos retirar o no hay que tener en cuenta que el retiro minimo debe ser de 100 dolares
*/


$donaciones = readline("por favor ingresa la cantidad de donaciones acumuladas: ");
$cartera = strtolower(readline("¿Tienes alguna cartera configurada? (si/no): ")) == "si";

if ($donaciones >= 100 && $cartera)
{
    echo "Puedes retirar tu dinero.";
}
elseif ($donaciones < 100 && !$cartera)
{
    echo "No tienes suficiente dinero y tampoco una cartera configurada.";
}
elseif ($donaciones < 100)
{
    echo "No tienes suficiente dinero.";
}
elseif (!$cartera)
{
    echo "No tienes una cartera configurada para recibir el retiro.";
}