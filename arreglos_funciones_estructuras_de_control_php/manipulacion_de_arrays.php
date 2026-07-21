<?php

/*
	manipulacion de arreglos
*/

$edades = [18,20,24];

// cuantos elementos hay dentro de un arreglo

var_dump($edades[0]);
echo count($edades);

echo"\n";

$frutas = array(

 "fresa" => 1500,
 "banano" => 1600,
 "manzana" => 2000,
 "pera" => 2500
);

//echo count($frutas);
//print_r($frutas);
var_dump($frutas);

echo "\n";

/*
    Otra función muy útil es array_push(), que nos permite añadir
    uno o varios elementos al final de un array.
*/

$edades = array(18,20,24);
array_push($edades,30,40);
print_r($edades);
var_dump($edades);


echo "\n";
//La función explode() convierte un string en un array utilizando un separador.

$fruta = "Manzana, Pera, Fresa";

$frutas_array = explode(", ", $fruta);
var_dump($frutas_array);

echo "\n";


// La funcion implode() une elementos de un array en un string, este convierte un array en un string

$datos = array( 'lastname', 'email', 'phone');
var_dump(implode(" , ", $datos));

echo "\n";

//Debemos saber que el seperador es opcional

$vocales =[

'primera' => 'a',
'segunda' => 'b',
'tercera' => 'c',

];

var_dump(implode($vocales));

echo "\n";

/*
    array_combine() crea un array asociativo a partir
    de dos arrays: uno aporta las claves y el otro los valores.
*/

$atributos = ['nombre', 'apellido', 'edad'];
$valores = ['Julian', 'Caracas', 24];

$persona = array_combine($atributos, $valores);

print_r($persona);




