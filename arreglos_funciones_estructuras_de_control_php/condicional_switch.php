<?php


/*

 Switch es una estructura de control que nos ayuda a legir que bloque de codigo ejecutar segun el valor de alguna variable. es una forma mas facil de tomar decisiones.

*/

// michi 1:9 
// michi 2:4
// michi 3:3
// michi 4:9
// michi 5:1


$michi = 5;

switch($michi){

case 1 :
   echo "Su numero favorito es el 9";
	break;

case 2:
   echo "Su numero favorito es el 4";
	break;

case 3: 
   echo "Su numero favorito es el 3";
       break;

case 4:
   echo "Su numero favorito es el 9";
       break;

case 5;
   echo "Su numero favorito es el 1";
       break;

default:
   echo "ese michi no existe";
};


echo "\n"; 


