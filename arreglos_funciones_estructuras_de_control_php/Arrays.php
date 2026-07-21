<?php


/* 

Un array o arreglo en realidad es un mapa ordenado, un mapa es un tipo que asocia valores a claves Este tipo está optimizado para varios usos diferentes; puede ser tratado como un array, lista (vector), tabla hash (una implementación de un mapa), diccionario, colección, pila, cola, y probablemente más. Como los valores array pueden ser otros arrays, también son posibles árboles y arrays multidimensionales.

Nota: Existe una sintaxis corta para escribir arrays que reemplaza esto array() con  esto [].

*/

// forma normal de escribir un Array asociativo

$price_fruits = array(

 "Naranjas" => 1000,
 "Bananos" =>  1500,
 "Peras" => 500,
 "Manzanas" => 2000
);

// Forma corta de escribir un Array

$price_fruits_2 = [

 "Naranjas" => 1500,
 "Bananos" =>  2500,
 "Peras" => 100,
 "Manzanas" => 3000
];

echo "\n";

/*

Si múltiples elementos en la declaración del array usan la misma clave, solo el último será usado, ya que todos los demás son sobrescritos.

*/

$ejemplo_1 = [

"nombre" => "julian",
"Apellido" => "Andres",
"edad" => 23,
"edad" => 24

];

$ejemplo_2 = array(

"nombre" => "julian",
"Apellido" => "Andres",
"edad" => 24,
"edad" => 25
);


var_dump($ejemplo_1,$ejemplo_2);


echo "\n";


/*

la clave es opcional. Si no se especifica, PHP usará la pocision de la clave, estos son arreglos no asociativos.

*/

$ejemplo_3 = [ "andres","caracas",24];

var_dump($ejemplo_3);

echo "\n";

// Es posible especificar la clave solo para algunos elementos y omitirla para otros

$ejemplo_4 = array(

    "julian",
    "Andres",
    "edad" => 24,

);

/*en este ejemplo esoty accediendo a un valor especifico del array en este caso es el nombre que esta en la pocicion 0, o tambien podemos acceder a ese valor mediante la clave a la que esta asociada ese valor */

var_dump($ejemplo_4[0],$ejemplo_4["edad"]); 

echo "la edad de " . $ejemplo_4[0] . " es " . $ejemplo_4["edad"] . " años";


echo "\n";

// yo dentro de un arreglo puedo tener mas arreglos veamos un ejemplo hare un ejemplo de las 2 formas

$personas = array(

    "julian" => array(
        "nombre" => "Julian",
        "apellido" => "Andres",
        "edad" => 24,
    ),

    "andres" => [
        "nombre" => "Andres",
        "apellido" => "Sanchez",
        "edad" => 25,
    ]

);

// Acceder a un dato específico
echo "La información de Andrés es: " .$personas["andres"]["nombre"] . " " .$personas["andres"]["apellido"] . ", Edad: " .$personas["andres"]["edad"];
