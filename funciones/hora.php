<?php

function horaActual() {

 date_default_timezone_set('America/Bogota');
 return date("H:i:s");

}


echo "!Hola me podrias decir la hora?";
echo " claro, son las " . horaActual() . " ";
