<?php

/*
    Este ciclo es muy parecido al ciclo while.
    También recibe una condición y permite modificar
    variables dentro del ciclo.

    La diferencia es que el bloque de código se ejecuta
    al menos una vez, sin importar si la condición es
    verdadera o falsa.
*/


$usernames = array("pepito","mr.michi","retamain");

do{

$username = readline("por favor, ingresa tu nuevo nombre de usuario: ");
echo"\n";

}while(in_array($username, $usernames));

echo "\n";